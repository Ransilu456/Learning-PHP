<?php
include "../connection/database.php";
$message = "";


if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Check the email exist
    $check = $connection->prepare("SELECT * FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();

    if($result->num_rows>0){
         $message = "Email already registered!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <main class="main">
        <section style="width: 600px;">
            <h1>FACECRACK</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quisquam eaque iure. Tempore beatae porro voluptatum eos ut dolor quia.</p>
             <?php echo $message; ?>
        </section>

        <section class="form-section">
            <form action="" method="post">
                <p style="margin-bottom: 20px; font-size:10px; text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo odit reiciendis sit mollitia!</p>

                <label for="username">Username: </label>
                <input type="text" name="username" id="username" placeholder="Enter your username" autocomplete="FALSE" />

                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="FALSE" />

                <label for="password">Password: </label>
                <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="FALSE" />

                <div style="margin-top: 20px; display: flex; align-items:center; gap: 10px;">
                    <input type="checkbox" name="forgot" id="forgot">
                    <label for="forgot" class="label-forgot">Forgot your password?</label>
                </div>

                    <button type="submit" class="btn primary" name="register">Sign Up</button>
            </form>
        </section>
    </main>
</body>

</html>

