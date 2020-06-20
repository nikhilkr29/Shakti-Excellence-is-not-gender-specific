<?php
session_start();

$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbname = 'BYTERS';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
$username = $_POST['username'];
$password = $_POST['password'];

if($conn->connect_error)
{
    die('Connection Failed :' .$conn->connect_error);
}
else{
$sql= "SELECT * FROM user_information WHERE userid='$username' AND password='$password'";

$result = $conn->query($sql);

if($result->num_rows ==1) {
    $_SESSION["id"] = "'$username'";
header("Location: nav.php");

}
else{
echo '<script  type="text/javascript">
alert("username or password incorrect!!! ");
window.location.replace("./loguser.html");
</script>';

}
}
?>