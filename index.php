<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    
    <form action="includes/signup.inc.php" method="POST">
        <input type="text" nane="first" placeholder="Firstname">
        <br>
        <input type="text" nane="last" placeholder="Lastname">
        <br>
        <input type="text" nane="email" placeholder="E-mail">
        <br>
        <input type="text" nane="uid" placeholder="Username">
        <br>
        <input type="password" nane="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">Sign up</button>
    </form>

</body>
</html>
