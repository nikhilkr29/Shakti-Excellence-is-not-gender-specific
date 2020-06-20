<?php
session_start();
if(isset($_SESSION['id'])){
  }else{echo '<script  type="text/javascript">
    alert("Login Again8f!!! ");
    window.location.replace("./loguser.html");
    </script>';
    }
  ?>
 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  *{
    font-size:xx-large;
    padding-top: 10px;
  }
  marquee{
    font-family: Georgia, serif;
    color: rgb(248, 247, 174);
    text-shadow: 5px 5px rgb(5, 4, 3);
  }
#mySidenav a {
  position:absolute;
  left: -80px;
  transition:0.3s;
  padding: 15px;
  width: 180px;
  text-decoration: none;
  border-style:inherit;
  font-size: 20px;
  color: black;
  border-radius: 0 5px 5px 0;
  box-shadow: 10px 5px 5px rgb(32, 2, 114);
}
#upnav a {
  position:fixed;
  text-align: center;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  border-style:inherit;
  box-shadow: ;
  font-size: 20px;
  color: black;
  border-radius: 30px;
  box-shadow: 10px 5px 5px rgb(32, 2, 114);
}
#help {
  top: 100px;
  right:100px;
  background-color:cyan;

}
#logout {
  top: 100px;
  right: 250px;
  background-color:cyan;

}

#mySidenav a:hover {
  left: 0;
}

#pers {
  top: 140px;
  background-color:cyan;
}

#acc {
  top: 200px;
  background-color: rgb(49, 230, 243);
}

#curr {
  top: 260px;
  background-color: #27c3f3;
}

#prev{
  top: 320px;
  background-color: rgb(17, 118, 250);
}
#ret{
  top: 380px;
  background-color: rgb(17, 118, 250);
}

</style>
</head>
<body style="background: url(matka.png);background-size:cover;">
  <marquee direction="right" height="100px">Welcome User</marquee>
<div id="mySidenav" class="sidenav">
  <a href="#" id="pers">Personal Information</a>
  <a href="dy.html" id="acc">Accounts Entry</a>
  <a href="show.php" id="ret">View accounts</a>
</div>
<div id="upnav" class="upnav">
  <a href="help.html" id="help">help</a>
  <a href="logout.php" id="logout">Log Out</a>
</div>

</body>
</html> 