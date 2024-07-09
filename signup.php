<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function validateForm() {
            var email = document.forms["signupForm"]["email"].value;
            var username = document.forms["signupForm"]["username"].value;
            var password = document.forms["signupForm"]["password"].value;
            var confirmPassword = document.forms["signupForm"]["confirm_password"].value;
            var error = "";

            // Email validation
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                error += "Invalid email format.\n";
            }

            // Username validation
            if (username.length < 3 || username.length > 20) {
                error += "Username must be between 3 and 20 characters.\n";
            }

            // Password validation
            if (password.length < 8) {
                error += "Password must be at least 8 characters long.\n";
            }

            // Confirm password validation
            if (password !== confirmPassword) {
                error += "Passwords do not match.\n";
            }

            // Strong password check
            var strongPasswordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
            if (!strongPasswordPattern.test(password)) {
                error += "Password must contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character.\n";
            }

            if (error !== "") {
                alert(error);
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form name="signupForm" action="https://desaivraj8740.github.io/my-website/process_signup.php" onsubmit="return validateForm()" method="POST">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            
            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>
