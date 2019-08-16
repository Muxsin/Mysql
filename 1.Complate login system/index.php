<?php
    require_once 'includes/config.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <h1>
            <?php echo $APP_CONFIG['global']['name']; ?>
        </h1>
        
        <pre>
            <?php
                require_once 'includes/conn.inc.php';
                $sql = "SELECT * FROM users WHERE user_id='1'";
                echo mysqli_query($conn, $sql);
            ?>
        </pre>
    

    </body>
</html>