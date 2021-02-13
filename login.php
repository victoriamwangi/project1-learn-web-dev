<?php 
include("db_connection.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $myemail= mysqli_real_escape_string($db, $_POST["email"]);
    $mypassword= mysqli_real_escape_string($db, $_POST["password"]);

    $sql="SELECT id FROM admin WHERE email = '$myemail' and passcode='$mypassword'";
    $result= mysqli_query($db, $sql);
    //mysqli_result::fetch_array ( int $resulttype = MYSQLI_BOTH ) 
    $row = msqli_fetch_array($result,MYSQLI_ASSOC);
    $active=$row["active"];

    $count= mysqli_num_row($result);

    if  ($count == 1){
        session_register(myemail);
        $_SESSION['login_user']= $myemail;
        
        header("location:welcome.php");
    }else{
        $error="Your Email or Password is incorrect";
    }
    
}
?>