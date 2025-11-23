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

## Database Structure

  Field Name   Type      Description
  ------------ --------- -----------------------------
  id           int       Auto increment, Primary key
  username     varchar   Unique
  email        varchar   Unique
  password     varchar   Hashed password

## Summary

    Register = Save (email, username, hashed password)
    Login = Match (email + password) → start session
    Session = Tracks logged-in user
    Logout = Delete session

## Security Tips

-   Always hash passwords, never store plain text.
-   Use prepared statements to prevent SQL injection.
-   Validate email and username before inserting.
-   Protect pages with session checks.
