<?php
//REGISTER USER
session_start();
include ("login_post.php");
if(isset($_POST['username'])){
    //receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

//FORM VALIDATION
if (empty($username)) {array_push($errors, "Username is required");}
if (empty($email)) {array_push($errors, "Email is required");}
if(empty($password_1)){array_push($errors, "Password is incorrect");}
if($password_1 != $password_2){
    array_push($errors, "The two passwords do not match");
}

//CHECK TO SEE THAT USER DOES NOT EXIST WITH THE SAME USERNAME & OR EMAIL
$username_check_query = "SELECT *FROM users WHERE username= '$username' OR email= '$email' LIMIT 1";
$result= mysqli_query($conn, $username_check_query);
$users= mysqli_fetch_assoc($results);

if($user){
    if(($users)['username']=== $username){
        array_push($errors, "Username already exists");
    }
    if ($user['email'] === $email){
        array_push($errors, "Email already exists");
    }
}

//REGISTER USER
if(count($errors) == 0){
    $password = md5($password_1); //encrypting the password
    $query = ("INSERT INTO 'users' (username, email, password)");
    mysqli_query($conn, $query);
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    header('location: index.php');
}
}?>