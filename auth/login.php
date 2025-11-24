<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <main class="main">
        <section style="width: 600px;">
            <h1>FACECRACK</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quisquam eaque iure. Tempore beatae porro voluptatum eos ut dolor quia.</p>
        </section>
        <section class="form-section">
            <form action="" method="post">

                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="FALSE" />

                <label for="password">Password: </label>
                <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="FALSE" />

                <div style="margin-top: 20px; display: flex; align-items:center; gap: 10px;">
                    <input type="checkbox" name="forgot" id="forgot">
                    <label for="forgot" class="label-forgot">Forgot your password?</label>
                </div>

                <div style="margin-top: 20px; display: flex; flex-direction: column; align-content: center; align-items: center; gap: 10px;">
                    <button type="submit" class="btn primary">Sign Up</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>