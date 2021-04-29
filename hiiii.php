<?php
include "connection.php";
?>

<html>
    <body>
        
        <?php
        session_start();
$username=$_POST['uname'];
$password=$_POST['psw'];
if($username=="admin" && $password=='12345')
{
echo "welcome user";
$_SESSION["log_in"]='1';



}
else{
    echo "wrong userid or password";

}
?>
 <a type="button" class="btn btn-success" id="btn2" href="loginPage.php" style="justify-content: center; align-items: center; margin: 10px auto; border-radius: 2px; padding: 0px 10px; font-size: 20px;font-weight: 600;
            cursor: pointer; font-family:Open Sans; background-color: #52b520; color:black;"><span>Logout</span></a></div>  
                  
</body>
</html>

