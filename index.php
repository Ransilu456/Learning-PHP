<?php

include 'connection/database.php';

echo "</br>", ("Hello World"), "</br>";
echo ("This where php logs");


$sql = "SELECT * FROM users";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo ("Users Found: " . $row['username'] . "</br>");
    }
} else {
    echo ("No Users in the Database.");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>

    <section style="display: flex; justify-content: center; align-items: center; margin-top: 100px;">
        <form action="" method="post" style="display: flex; flex-direction:column; gap: 10px; width: 600px">

            <h1>Welcome Back!</h1>

            <label for="username">Username: </label>
            <input type="text" name="username" id="username" placeholder="Enter your username" autocomplete="FALSE" />

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="FALSE" />

            <label for="password">Password: </label>
            <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="FALSE" />

            <button type="submit">Sign Up</button>
            <button type="reset" disabled>Clear Form</button>
        </form>
    </section>

</body>

</html>