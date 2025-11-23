<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <section class="form-section">
        <form action="" method="post">
            <h1>Welcome Back!</h1>

            <label for="username">Username: </label>
            <input type="text" name="username" id="username" placeholder="Enter your username" autocomplete="FALSE" />

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="FALSE" />

            <label for="password">Password: </label>
            <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="FALSE" />

            <button type="submit" class="btn primary">Sign Up</button>
            <button type="reset"  class="btn secondary" disabled>Clear Form</button>
        </form>
    </section>

</body>

</html>

<?php
/*

include 'connection/database.php';

echo "</br>", ("Hello World"), "</br>";
echo ("This where php logs"), "</br>";
echo (""), "</br>";

// GET ALL USER'S DATA
$sql = "SELECT * FROM users";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo ("User Name: " . $row['username'] . "</br>");
        echo ("User Email: " . $row['email'] . "</br>");
        echo ("User Password: " . $row['password'] . "</br>");
        echo ("User Registered TIme: " . $row['registerd_time'] . "</br>");
    }
} else {
    echo ("No Users in the Database.");
}
 */
?>