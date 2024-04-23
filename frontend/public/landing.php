<div class="landing-header">
    <div class="landing-container">
            <div class="landing-logo">
                <div>
                    <a href="/schoolsystem/index.php">
                        <img src="frontend\img\logo1.png" alt="school-logo" class="school-logo">
                    </a>
                </div>
                <div>
                    <label for="logo">School Name</label>
                </div>
            </div>
            <div class="account">
                <a href="frontend/public/login.php" class="login-button">LogIn</a>
            </div>
    </div>
</div>

<nav>
    <?php 
        include('partials/navigation.php')
    ?>
</nav>


<div class="main">
    <?php 
        include('partials/main-public.php')
    ?>
</div>