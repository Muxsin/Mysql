<!DOCTYPE html>
<html>
<head>
    <title>Hashing</title>
    <link rel="stylesheet" href="../uploads/css/style.css"  type="text/css" />
</head>
<body>
    <?php
        /* //Hashing
        echo "test123" . '<br>';
        echo password_hash('test123', PASSWORD_DEFAULT);*/

        //De-hashing        
        $input = "test123";
        $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);
        echo password_verify($input, $hashedPwdInDb);
    ?>
</body>
</html>
