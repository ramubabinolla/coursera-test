<html>
<title> HOME </title>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<style>
.btn
 {
  border-radius: 40px;
  background-color:yellow;
  width: 150px;
  text-align:center;
  height: 50px;
  font-weight:999;
  color: black
 }
</style>

<body >


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

         </div>
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>



 		<!--
			<nav>
				<ul>
					 <li><a href="index1.html"><img style="position: relative;"src='images/logo9.png' height="60px" width="120px"><li>
					<li><a href="#pageA"> Page A</li>
					<li><a href="#pageB"> Page B</li>
					<li><a href="#pageC"> Page C</li>
					<li><a href="#pageD"> Page D</li>
					<li><a href="#pageE"> Page E</li>
					<li><a href=login.php> Admin Login<a><li>
				</ul>
			</nav>
			
		-->

			
 
		
		
		</section>

		<section id="pageE">
			<?php
	
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if ($name === ''){
echo "<center><h2>Name cannot be empty.</h2></center>";
echo("<center><button class=\"btn\" onclick=\"location.href='index.php#pageE'\">Submit Again</button></center>");
die();
}
if ($email === ''){
echo "<center><h2>Email cannot be empty.</h2></center>";
echo("<center><button class=\"btn\" onclick=\"location.href='index.php#pageE'\">Submit Again</button></center>");
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "<center><h2>Email format invalid.</center></h2>";
echo("<center><button class=\"btn\" onclick=\"location.href='index.php#pageE'\">Submit Again</button></center>");
die();
}
}
if ($subject === ''){
echo "<center><h2>Subject cannot be empty.</center></h2>";
echo("<center><button class=\"btn\" onclick=\"location.href='index.php#pageE'\">Submit Again</button></center>");
die();
}
if ($message === ''){
echo "<center><h2>Message cannot be empty.</center></h2>";
echo("<center><button class=\"btn\" onclick=\"location.href='index.php#pageE'\">Submit Again</button></center>");
die();
}
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "admin";
	
		$sname = $_POST["name"];
		$semail = $_POST["email"];
		$ssubject = $_POST["subject"];
		$smessage = $_POST["message"];

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db);

	// Check connection
	if (!$conn) 
	{
	    die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT INTO contactus (cname, cemail, csubject,cmessage) VALUES ('".$sname."', '".$semail."', '".$ssubject."','".$smessage."')";

	if (mysqli_query($conn, $sql)) 
	{
	    echo "<center><h2>Thank you <br>Successfully  submited</center></h2>";
		echo("<center><button class=\"btn\" onclick=\"location.href='index.php'\">Back to Home</button></center>");
	} 
	else 
	{
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

?>

		</section>
		

		
 



	
		
		
	

</body>
  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ajax-utils.js"></script>
  <script src="js/script.js"></script>
  
</html>

<style>
// sections
section{width:50%; height:1000px; float:left;}

#pageA{background:white;} 
#pageB{} 
#pageC{background:#A8D661;} 
#pageD{background:#61D6A3; } 
#pageE{background:#61A4D6;}

//nav
{
 overflow: hidden;
  background-color: #333;
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%;
  height:60px
}

ul{width:fit-content; margin:auto; list-style: none; }

ul li{ position: relative;float:left; margin-right:30px;}

ul li a{color:#fff; text-decoration:none; }

ul li a:hover{text-decoration:underline;}

h1{color:green; text-align: center; margin-top:150px;}




 select
 {
  border-radius: 40px;
  margin: 50px;
text-align-last:center;
    width: 150px;
    height: 50px;
    background-color:;
    font-weight:800;
 }
 select .lt
 {
  text-align:center;
 }

 .btn
 {
  border-radius: 40px;
  background-color:yellow;
  width: 150px;
  text-align:center;
  height: 50px;
  font-weight:999;
 }
 
</style>








