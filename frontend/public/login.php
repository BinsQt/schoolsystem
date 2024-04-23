

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

            <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>
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
