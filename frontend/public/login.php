<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="landing-header">
        <div class="landing-logo">
            <a href="#">Logo</a>
        </div>
        <div class="account">
            <a href="landing.php">Home</a>
        </div>
    </div>
    <div class="landing-navigation">
        <div>
            <a href=""><h1>School Name</h1></a>
        </div>
        <div>
            <a href="#">About</a>
            <a href="#">Contact Us</a>
            <a href="#">Help</a>
        </div>
    </div>
    <div class="main">
        <div class="login">
            <form action="landing.php" method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" class="text">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="password">
                </div>
                <input type="submit" value="login">
            </form>
        </div>
    </div>
</body>
</html>