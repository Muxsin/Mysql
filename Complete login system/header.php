<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css"  type="text/css" />
</head>
<body>

    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
                <div class="nav-login">
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="uid" placeholder="Username/e-mail">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign up</a>
                </div>
            </div>
        </nav>
    </header>

    

</body>
</html>