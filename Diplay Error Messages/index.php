<head>
    	<link rel="stylesheet" href="../uploads/css/style.css"  type="text/css" />
</head>
<body>
    <form method="post" action="includes/signup.inc.php">
        <div class="container" style="text-align: center; margin-top: 8%;">
        <h2>Signup</h2>
            <?php
                if(isset($_GET['first'])){
                    $first = $_GET['first'];
                    echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'" style="margin:5px;" /><br />';
                }
                else{
                    echo '<input type="text" name="first" placeholder="Firstname" style="margin:5px;" /><br />';
                }
                if(isset($_GET['last'])){
                    $last = $_GET['last'];
                    echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'" style="margin:5px;" /><br />';
                }
                else{
                    echo '<input type="text" name="last" placeholder="Lastname" style="margin:5px;" /><br />';
                }
            ?>
            <input type="password" name="pwd" placeholder="Password" style="margin:5px;" /><br />
            <input type="text" name="email" placeholder="E-mail" style="margin:5px;" /><br />
            <?php
                if(isset($_GET['uid'])){
                    $uid = $_GET['uid'];
                    echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'" style="margin:5px;" /><br />';
                }
                else{
                    echo '<input type="text" name="uid" placeholder="Username" style="margin:5px;" /><br />';
                }
            ?>
            <input type="submit" name="submit" value="Submit" />
        </div>
    </form>

    <p style="color: red; text-align: center;">
        <?php
        //First method
           /*$fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
          
           if (strpos($fullUrl,"signup=empty") == true) {
               echo "You did not fill all fields!";
               exit();
           }
           elseif(strpos($fullUrl,"signup=char") == true){
               echo "You used invalid characters!";
               exit();
           }
           elseif(strpos($fullUrl,"signup=email") == true){
                echo "You used invalid e-mail!";
                exit();
            }
            elseif(strpos($fullUrl,"signup=success") == true){
                echo '<p style="color: green; text-align: center;">' . "You have been signed up!";
                exit();
            }*/

        //Second method

        if(!isset($_GET['signup'])){
            exit();
        }else{
            $signupCheck= $_GET['signup'];
            if($signupCheck === "empty"){
                echo "You did not fill all fields!";
                exit();
            }
            elseif($signupCheck === "char"){
                echo "You used invalid characters!";
                exit();
            }
            elseif($signupCheck === "email"){
                echo "You used invalid e-mail!";
                exit();
            }
            elseif($signupCheck === "success"){
                echo '<p style="color: green; text-align: center;">' . "You have been signed up!";
                exit();
            }
        }

        ?>
    </p>

</body>