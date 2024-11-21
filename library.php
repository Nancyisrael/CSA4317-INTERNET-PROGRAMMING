<?php
$servername="localhost";
$username="root";
$password="";
$dbname="library";
$conn=new mysqli($servername,$username,$password,$dbname);
$st=$conn->prepare("INSERT INTO user VALUES (?,?,?,?,?,?)");
$st->bind_param("sissss",$name,$reg,$user_name,$password,$gender,$dept);
$name=$_POST["name"];
$reg=$_POST["reg"];
$user_name=$_POST["user_name"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$dept=$_POST["dept"];
$st->execute();
echo "SUCCESS!";

$conn->close();
$st->close();
?>

