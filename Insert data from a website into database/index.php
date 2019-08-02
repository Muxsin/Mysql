<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    
    <form method="post" action="./includes/signup.inc.php">
        <div class="container" style="text-align: center; margin-top: 8%;">
            <input type="text" name="uid" placeholder="Username" style="margin:5px;" /><br />
            <input type="text" name="first" placeholder="Firstname" style="margin:5px;" /><br />
            <input type="text" name="last" placeholder="Lastname" style="margin:5px;" /><br />
            <input type="password" name="pwd" placeholder="Password" style="margin:5px;" /><br />
            <input type="text" name="email" placeholder="E-mail" style="margin:5px;" /><br />
            <input type="submit" value="Select" />
        </div>
    </form>
    
</body>
</html>
