<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login";
$conn=new mysqli($servername,$username,$password,$dbname);
$st=$conn->prepare("INSERT INTO agents VALUES (?,?,?,?,?)");
$st->bind_param("siiss",$name,$id,$reid,$bank,$place);
$name=$_POST["name"];
$id=$_POST["id"];
$reid=$_POST["reid"];
$bank=$_POST["bank"];
$place=$_POST["place"];
$st->execute();
echo "SUCCESS!";
header("refresh:3;url=agent1.html");
$conn->close();
$st->close();
?>