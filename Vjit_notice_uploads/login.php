<?php
session_start();
$message="";

if(count($_POST)>0) {
 $con = mysqli_connect('127.0.0.1:3306','root','','admin') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
} else {
$message = "Invalid Username or Password!";
echo "<script type='text/javascript'>alert('$message');</script>";

}
}
if(isset($_SESSION["id"])) {
header("Location:index2.php");
}
?>
<html>
<head>
<title>Admin Login</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="pull-left visible-md visible-lg">
            <div id="logo9-img" alt="Logo image" ><img src='images/logo9.png' height ="100xp"></div>
          </a>

          <div class="navbar-brand">
            <a href="index.php"><h1>ORIGIN TECHNO SCHOOL</h1></a>
            
          </div>

          <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
		
		</div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>
		
		
		
		
<form name="adminlogin" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
 
	<div class="overlay1">
	  		
	</div>
  
<center>
<div class="size1 overlay1">
	<p class="Pqp">Admin Login</p>
<br>
 <input Style="background-color:#2E2E2E" class="inputvalues" placeholder="User ID"  type="text" name="user_name">
 <br>
 <br>
<input  Style="background-color:#2E2E2E" class="inputvalues" placeholder="Password"  type="password" name="password">
<br><br>
<input class="btn" type="submit" name="submit" value="Submit">
<br>
<br>
<input class="btn" type="reset">
</form>

</body>
</html>
</html>
</html>
<style>


 .btn
 {
  border-radius: 40px;
  background-color: red;
  width: 150px;
  text-align:center;
  height: 50px;
  font-weight:999;
 }
 
.Pqp
{
	font-family: Verdana, Arial, Tahoma, Serif,bold;
  
  font-size:40px;
  color:white;
  text-anchor:bold;
  
}


.inputvalues
{
  border-radius: 5px;
  
text-align-last:center;
    width: 250px;
    height: 50px;
    background-color:;
    font-weight:800;
}

</style>