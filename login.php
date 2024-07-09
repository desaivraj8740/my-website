<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>User Authentication</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form name="signupForm" action="process_signup.php" onsubmit="return validateForm()" method="POST">

            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="index.html">Sign up here</a></p>
    </div>
</body>
</html>
