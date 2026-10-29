# Bajarang Tech Solution — Website

Official PHP website of **Bajarang Tech Solution** (Kanpur, India) — an IT services company offering
web design & development, mobile app development, SEO, digital marketing, PPC, social media marketing,
email marketing, content marketing and bulk SMS services.

The site is a classic multi-page (non-framework) PHP website. Each service has its own SEO landing
page, plus core pages like Home, About, Services, Price, Portfolio, Reviews, Careers, Contact and an
e-learning (`etraining/`) section.

---

## ✨ Highlights

- Pure **PHP + HTML5 + CSS3 + JavaScript** — no build step, no framework, easy shared hosting deploy
- 20+ SEO-optimised landing pages (`*-company-in-kanpur.php`)
- Shared header / footer partials for consistent navigation
- Fully responsive layout (Bootstrap grid + custom `responsive.css`)
- Contact / inquiry form saving leads to a MySQL database
- Custom 404 page
- Icons via Font Awesome & Bootstrap Icons, carousels via Slick Carousel

---

## 🧰 Tech Stack

| Layer      | Technology                                          |
| ---------- | --------------------------------------------------- |
| Server     | PHP 7.4+ (MySQLi extension)                         |
| Database   | MySQL / MariaDB                                     |
| Markup     | HTML5                                               |
| Styling    | CSS3, Bootstrap 4 (grid & components)               |
| Scripts    | jQuery 3.4, Bootstrap JS, Slick Carousel, custom JS |
| Fonts      | Google Fonts (Roboto), local `fonts/`               |
| Web server | Apache / Nginx (any PHP-capable host)               |

---

## 📁 Project Structure

```
Bajarang Tech Solution Web/
├── index.php                          # Home page
├── about.php                          # About the company
├── service.php                        # All services listing
├── price.php                          # Pricing plans
├── our-portfolio.php                  # Portfolio / work samples
├── best-client-review-in-kanpur.php   # Client testimonials
├── best-our-expert-team-in-kanpur.php # Team page
├── best-our-blogs-company-in-kanpur.php# Blog listing
├── career.php                         # Careers / job openings
├── contact.php                        # Contact + inquiry form
├── topnav.php                         # Shared header & navigation include
├── main-footer.php                    # Shared footer include
├── contact-form.php                   # Reusable contact form markup
├── inquiry-form-insert.php            # Form handler (inserts lead into DB)
├── *-company-in-kanpur.php            # Individual service SEO landing pages
├── etraining/                         # E-learning section (courses, 404, footer)
├── css/                               # bootstrap.css, style.css, responsive.css, services.css
├── js/                                # jquery, bootstrap.js, custom.js
├── images/                            # Site images & icons
└── fonts/                             # Local webfonts
```

> The `etraining/` folder is a separate mini-site (training courses portal) with its own
> `index.php`, `courses.php`, `contact.php`, `footer.php` and assets.

---

## 🚀 Getting Started (Local)

### 1. Requirements

- PHP 7.4 or newer (with `mysqli`)
- MySQL / MariaDB
- Apache (XAMPP / WAMP / Laragon) — recommended

### 2. Clone the repository

```bash
git clone https://github.com/keshkumar-tech/bajrang-tech-solution-web.git
cd bajrang-tech-solution-web
```

### 3. Place it under your web root

We recommend running it through XAMPP/WAMP:

```
C:\xampp\htdocs\bajrang-tech-solution-web
```

### 4. Create the database

```sql
CREATE DATABASE bajarang_tech_solution_db
  CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE bajarang_tech_solution_db;

CREATE TABLE inquery_form (
  id         INT AUTO_INCREMENT PRIMARY KEY,
  enqname    VARCHAR(100) NOT NULL,
  enqemail   VARCHAR(150) NOT NULL,
  enqphone   VARCHAR(20)  NOT NULL,
  enqmessage TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 5. Configure DB credentials

Edit `inquiry-form-insert.php` (and any other file that connects to the database):

```php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "bajarang_tech_solution_db";
```

> ⚠️ Better practice: move these values into an `env.php` (or `.env`) file that is **not** committed
> to version control, and include that file instead.

### 6. Run it

Start Apache + MySQL from the XAMPP/WAMP control panel, then open:

```
http://localhost/bajrang-tech-solution-web/
```

Or use PHP's built-in server (DB forms still need MySQL):

```bash
php -S localhost:8000
```

---

## 📨 Inquiry Form Flow

1. User fills the form on `contact.php` (markup from `contact-form.php`).
2. POST goes to `inquiry-form-insert.php`.
3. Data is inserted into the `inquery_form` table using a **prepared statement**.
4. On success the user is redirected to `index.php?success=1`.

Fields expected: `enqname`, `enqemail`, `enqphone`, `enqmessage`.

---

## ➕ Adding a New Service Page

1. Copy an existing page, e.g. `seo-optimization-company-in-kanpur.php`.
2. Rename it using the URL pattern: `service-name-company-in-kanpur.php`.
3. Update the `<title>`, meta description/keywords, banner heading and body content.
4. Include it in the navigation in `topnav.php` and in the services grid in `service.php` /
   `main-footer.php` where relevant.

---

## 🌐 Deployment (shared hosting / cPanel)

1. Upload all project files to `public_html/` (via File Manager or FTP).
2. Create the database in cPanel → MySQL Databases and import the SQL above.
3. Update the DB credentials in `inquiry-form-insert.php`.
4. Point your domain / `index.php` as the default document.
5. Ensure `images/` and `etraining/` assets have correct permissions (usually `755`).

No build step is required — the repository is deploy-ready.

---

## 🔒 Security Notes

- Never commit `.env`, database credentials or API keys (already covered by `.gitignore`).
- The inquiry form uses prepared statements — keep that pattern for any new query.
- Add server-side validation (name/email/phone format) and CSRF protection before going fully
  public, if needed.
- Escape any user-supplied content before echoing it back to the page.

---

## 🤝 Contributing

1. Create a branch: `git checkout -b feature/my-change`
2. Commit your work: `git commit -m "Add: short description"`
3. Push: `git push origin feature/my-change`
4. Open a Pull Request on GitHub.

---

## 📄 License

Internal project of Bajarang Tech Solution. The `etraining/` template ships with its own
`LICENSE.txt` — refer to that for the e-learning template licensing terms.

---

## 📞 Contact

**Bajarang Tech Solution**
Kanpur, Uttar Pradesh, India
🌐 Website: [bajrangtechsolution.com](https://bajrangtechsolution.com)
🐙 Repository: [keshkumar-tech/bajrang-tech-solution-web](https://github.com/keshkumar-tech/bajrang-tech-solution-web)
