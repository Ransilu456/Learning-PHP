<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <div class="users-list">
        <?php
        include '../connection/database.php';

        $sql = "SELECT * FROM users";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "" . "<br>";
                echo "<hr>";
                echo "User ID: " . $row['id'] . "<br>";
                echo "Username: " . $row['username'] . "<br>";
                echo "Email: " . $row['email'] . "<br>";
                echo "Password: " . $row['password'] . "<br>";
                echo "Registered At: " . $row['reg_date'] . "<br>";
                echo "" . "<br>";
            }
        } else {
            echo "No users in the database.";
        }
        ?>
    </div>

</body>

</html>