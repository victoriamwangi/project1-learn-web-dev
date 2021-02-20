<?php
session_start();
//include
$servername = "localhost";
$username = "root"; // For MYSQL the predifined username is root
$password = "4798@vnm"; // For MYSQL the predifined password is " "(blank)
$errors = array();


// Create connection
$conn = mysqli_connect($servername, $username, $password);

 
//Check connection

 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

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
}
?>