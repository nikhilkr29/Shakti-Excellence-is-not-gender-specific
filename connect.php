<?php
$firstName = $_POST['firstName'];
$NGOName = $_POST['NGOName'];
$AadharNum = $_POST['AadharNum'];
$UNGOI = $_POST['UNGOI'];
$userid = $_POST['userid'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$country = $_POST['country'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$bank = $_POST['bank'];
$cc_name = $_POST['cc_name'];
$cc_number = $_POST['cc_number'];

$host = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbname = 'BYTERS';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if($conn->connect_error)
{
    die('Connection Failed :' .$conn->connect_error);
}
else{

$sql ="INSERT Into user_information (firstName, NGOName, AadharNum, UNGOI, userid, password, email, address, address2, country, state, zip, bank, cc_name, cc_number) values('$firstName', '$NGOName', '$AadharNum', '$UNGOI', '$userid', '$password', '$email', '$address', '$address2', '$country', '$state', '$zip', '$bank', '$cc_name', '$cc_number')";
$table = "CREATE TABLE $userid LIKE demo_retriver";
mysqli_query($conn, $table);
if(mysqli_query($conn, $sql)){
header("location:reg.html");
}

$conn->close();

}

?>