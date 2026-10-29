<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['enqname'];
    $email = $_POST['enqemail'];
    $phone = $_POST['enqphone'];
    $message = $_POST['enqmessage'];

    // Database connection details
    $servername = "localhost"; // Change to your server name if different
    $username = "root";        // Change to your database username
    $password = "";            // Change to your database password
    $dbname = "bajarang_tech_solution_db"; // Replace with your actual database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query
    $sql = "INSERT INTO inquery_form (enqname, enqemail, enqphone, enqmessage) VALUES (?, ?, ?, ?)";

    // Prepare the statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    // Execute the statement
    if ($stmt->execute()) {
               header("Location: index.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
