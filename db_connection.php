<?php
// function OpenCon ()
// {
//     $dbhost = "localhost";
//     $dbuser="root";
//     $dbpass= "4798@vnm";
//     // $db= "pg1";

//     $conn= new mysqli($dbhost, $dbuser, $dbpass) or die("Connect failed: %s\n". $conn -> error);
//     $dbhost = 'localhost:3036';
//     $dbuser = 'root';
//     $dbpass = 'rootpassword';
 
//     }

//     return $conn;
//  function CloseCon($conn){
//      $conn -> close();
//  }

$servername = "localhost";
$username = "root"; // For MYSQL the predifined username is root
$password = "4798@vnm"; // For MYSQL the predifined password is " "(blank)

// Create connection
$conn = new mysqli($servername, $username, $password);

 
// Check connection

 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";