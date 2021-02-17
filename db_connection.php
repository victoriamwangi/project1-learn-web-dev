<?php
session_start();

$servername = "localhost";
$username = "root"; // For MYSQL the predifined username is root
$password = "4798@vnm"; // For MYSQL the predifined password is " "(blank)
$errors = array();


// Create connection
$conn = mysqli_connect($servername, $username, $password);

 
/*Check connection

 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/

//REGISTER USER
if(isset($_POST['reg_user'])){
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
$result= mysqli_query($conn, $username_check_query_query);
$users= mysqli_fetch_assoc($results);

if($user){
    if(($users)['username']=== $usename){
        array_push($errors, "Username already exists");
    }
    if ($user['email'] === $email){
        array_push($errors, "Email already exists");
    }
}

//REGISTER USER
if(count($errors) == 0){
    $password = md5($password_1); //encrypting the password
    $query = ("INSERT INTO users (username, email, password");
    mysqli_query($conn, $query);
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    header('location: index.php');
}
}
//LOGIN USER 
if (isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if (empty($username)){
        array_push($errors, "Username is required");
    }
    if (empty($password)){
        array_push($erors, "Password is required");
    }
     if (count($errors) == 0){
         $password = md5($password);
         $query = "SELECT *FROM users WHERE username = '$username' AND password ='$password'";
         $results = mysqli_query($conn, $query);
         if (mysqli_query($results) == 1){
             $_SESSION['username'] = $username;
             $_SESSION['success']= "You are now logged in";
             header ('location: index.php');
         }else{
             array_push($errors, "Wrong username/password combination");
         }
     }
}
?>
