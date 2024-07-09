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
        <h2>Sign Up</h2>
        <form name="signupForm" action="https://desaivraj8740.github.io/my-website/signup.php" method="POST">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" autocomplete="email" required>

            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" autocomplete="username" required>
            
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" autocomplete="new-password" required>
            
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" autocomplete="new-password" required>
            
            <input type="submit" value="Sign Up">
        </form>
        
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>

    <script>
        document.querySelector('input[name="password"]').addEventListener('input', function() {
            var password = this.value;
            var strength = document.getElementById('password-strength');
            
            if (!strength) {
                strength = document.createElement('div');
                strength.id = 'password-strength';
                this.parentNode.insertBefore(strength, this.nextSibling);
            }
        
            if (password.length < 6) {
                strength.textContent = 'Weak';
                strength.style.color = 'red';
            } else if (password.length < 10) {
                strength.textContent = 'Medium';
                strength.style.color = 'orange';
            } else {
                strength.textContent = 'Strong';
                strength.style.color = 'green';
            }
        });
        </script>
        

</body>
</html>
