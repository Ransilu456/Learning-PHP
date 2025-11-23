# 🚀 Steps to Consider for PHP Login & Registration System

## 1️⃣ Setting up MySQL & phpMyAdmin

- 👉  Install **XAMPP** or **WAMP**.
- 👉  Start **Apache** and **MySQL**.
- 👉  Access phpMyAdmin via `http://localhost/phpmyadmin`.
- 👉  Create a database (e.g., `user_db`).
- 👉  Create `users` table with fields like `id`, `username`, `email`,
    `password`.

## 2️⃣ Creating a Local Project Folder (Recommended Structure)

    /my_project
    │── index.php
    │── login.php
    │── register.php
    │── dashboard.php
    │── logout.php
    │── database.php
    └── /assets
         ├── css/
         └── js/

> Place this folder in `C:\xampp\htdocs\` or `C:\wamp64\www\`.

## 3️⃣ Testing Login/Register System

-   Access via:

```{=html}
<!-- -->
```
    http://localhost/my_project/

-   MySQL CLI test:

``` bash
mysql -u root -p
USE user_db;
SELECT * FROM users;
```

## 4️⃣ Improving Security & Validation

-   Use `password_hash()` & `password_verify()`.
-   Use **prepared statements** to prevent SQL injection.
-   Validate input.
-   Implement session protection.

## 5️⃣ Making UI using Bootstrap or Tailwind

  Framework   Pros                   Usage
  ----------- ---------------------- ------------
  Bootstrap   Easy, Fast             CDN Link
  Tailwind    Modern, Customizable   CDN or npm

## 6️⃣ Deploying to Online Hosting

-   Shared hosting: via cPanel → upload project → configure DB.
-   VPS: install Apache, PHP, MySQL → upload app → configure DB.

------------------------------------------------------------------------

# PHP Login & Registration System -- How It Works

## 1️⃣ Registration Flow

    [User Fills Form]
         |
         v
    [Click "Register"]
         |
         v
    [PHP Receives Data]
         |
         v
    [Is email/username already in DB?] -- Yes --> [Show Error: "User already exists"]
         |
         No
         v
    [Hash the Password]
         |
         v
    [Insert into Database (username, email, password-hash)]
         |
         v
    [Show: "Registration Successful"]

## 2️⃣ Login Flow

    [User Enters Email & Password]
         |
         v
    [Click "Login"]
         |
         v
    [PHP Checks email in Database]
         |
         v
    [If email not found] --> [Show Error: "Invalid Email"]
         |
         v
    [Get the stored hashed password]
         |
         v
    [Verify entered password with hashed password]
         |
         v
    [If incorrect] --> [Show Error: "Invalid Password"]
         |
         v
    [If correct] --> [Start PHP SESSION]
         |
         v
    [Redirect to Dashboard or Home Page]

## 3️⃣ Session Handling

    [User logs in]
         |
         v
    [PHP stores user info in SESSION]
         |
         v
    [On every protected page]
         |
         v
    [Check if SESSION exists]
         |
         Yes ------------------------> [Allow access]
         |
         No
         v
    [Redirect to Login Page]

## 4️⃣ Logout Flow

    [User clicks Logout]
         |
         v
    [Destroy SESSION]
         |
         v
    [Redirect to Login or Home]

## 🗄 Database Structure

  Field Name   Type      Description
  ------------ --------- -----------------------------
  id           int       Auto increment, Primary key
  username     varchar   Unique
  email        varchar   Unique
  password     varchar   Hashed password

## 📌 Summary

    Register = Save (email, username, hashed password)
    Login = Match (email + password) → start session
    Session = Tracks logged-in user
    Logout = Delete session

## 🔐 Security Tips

-   Always hash passwords.
-   Use prepared statements.
-   Validate all inputs.
-   Use sessions to protect pages.

------------------------------------------------------------------------

💡 *End of documentation. You are ready to implement!*
