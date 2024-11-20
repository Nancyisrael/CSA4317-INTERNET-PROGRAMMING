<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login";
$conn=new mysqli($servername,$username,$password,$dbname);
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $stmt = $conn->prepare("SELECT id, name FROM agents WHERE name = ? AND id = ?");
    $stmt->bind_param("ss", $name, $id);
    $stmt->execute();
    $stmt->bind_result($id, $retrieved_username);
    if ($stmt->fetch()) {
        echo "User found"."<br>";
        echo "User ID: " . $id . "<br>";
        echo "Username: " . $retrieved_username;
    } else {
        echo "Invalid username or id.";
    }
    $stmt->close();
    $conn->close();
}
?>