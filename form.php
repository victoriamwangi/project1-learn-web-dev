<?php
$mysqli= mysqli_connect("localhost", "root", " ", "pg1");
if($link ===false){
    die("Error coonecting to database".$mysqli->connect_error);
}
echo("Connected succesfully.Host infor: ".$mysqli->host_info);

$msqli->close();
?>