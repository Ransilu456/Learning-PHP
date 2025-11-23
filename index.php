<?php
echo ("Hello World")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Welcome Back!</h1>

    <form action="" method="post" style="display: flex; flex-direction:column; gap: 10px;">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" placeholder="Enter your username" />

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder="Enter your email " />

        <label for="password">Password: </label>
        <input type="password" name="password" id="password" placeholder="Enter your password" />

        <button type="submit">Sign Up</button>
        <button type="reset" disabled>Clear Form</button>
    </form>

</body>

</html>