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

$db= mysqli_connect("localhost", "root", "4798@vnm", "pg1") or die("Error connecting to database");

 ?>