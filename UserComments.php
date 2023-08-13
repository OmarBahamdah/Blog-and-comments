<?php
include 'DB-CONFIG.php';
$title = $_POST["title"];
$Uname = $_POST["Uname"];
$comment = $_POST["comment"];

$con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);

if(mysqli_connect_errno()){
    
    die("Error while connecing to DB!");
    }
    $query = "INSERT INTO comment(title,name,comment) VALUES('$title','$Uname','$comment')";
mysqli_query($con,$query);

mysqli_close($con);

header("location:index.php");

?>
