<?php
$to="anjalikmari9@gmail.com";
$subject="Response from website";
$message="I am very thankful to you";
$headers="From:shg@index.in";


if(mail($to,$subject,$message,$headers)){
    echo "Send Succesfully";


}

else{

    echo "Error";
}




?>
