<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure that all fields are set and not empty
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Ensure the form fields are not empty
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bajarang_tech_solution_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL query
        $sql = "INSERT INTO contact_form (name, email, phone, message) VALUES (?, ?, ?, ?)";

        // Prepare the statement to prevent SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $phone, $message);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to the home page with a success message (optional)
            header("Location: index.php?success=1");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Please fill in all fields.";
    }
}
?>
