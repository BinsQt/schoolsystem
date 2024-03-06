<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/style.css">
    <title>School Name</title>
</head>
<body>
    <div class="landing-header">
        <div class="landing-container">
            <div class="landing-logo">
                <a href="/schoolsystem/index.php">
                    <img src="frontend\img\logo1.png" alt="school-logo" class="school-logo">
                </a>
            </div>
            <div class="account">
                <a href="frontend/public/login.php" class="login-button">LogIn</a>
            </div>
        </div>
    </div>
    <div class="landing-navigation">
        <?php 
            include'partials\navigation.php'
        ?>
    </div>
    <div class="main">
        <h1>Welcome to "School Name"</h1>
    </div>
</body>
</html>