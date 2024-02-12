<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/style.css">
    <title>Login</title>
</head>
<body>
    <div class="landing-header">
        <div class="landing-logo">
            <a href="#">Logo</a>
        </div>
        <div class="account">
            <a href="/schoolsystem/index.php">Home</a>
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
            
            <form action="/schoolsystem/backend/userin.php" method="post">
                <div>
                    <label for="username" >Username</label>
                    <input type="text" name="username" class="text">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" class="password">
                </div>
                <input type="submit" value="login" name="login">
            </form>
        </div>
    </div>
</body>
</html>