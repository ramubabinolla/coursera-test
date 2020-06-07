<?php
session_start();
?>
<html>
<title> Upload Notices </title>
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

          <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
		
		<div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li id="navHomeButton" class="visible-xs active">
              <a href="index.php">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
			
            <li>
              <a href="Queries.php">
                <span class="glyphicon glyphicon-question-sign"></span><br class="hidden-xs">Queries</a>
            </li>
			
			
			
			<li>
              <a href="deletenotices.php">
                <span class="glyphicon glyphicon-floppy-remove"></span><br class="hidden-xs"> Delete Notices</a>
            </li>
            
              
            
			
			<li id="navMenuButton">
              <a href="logout.php" onclick="$dc.loadMenuCategories();">
                <span class="glyphicon glyphicon-log-out"></span><br class="hidden-xs">Logout</a>
            </li>
            
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
		
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
<?php
if($_SESSION["name"]) {		
		
		echo"<center>
		<h2>Upload Files</h2>
		<h4>Before uploding the file Please Rename the file to be understandable manner related to Notice</h4>
			<form method=\"POST\" action=\"upload.php\" enctype=\"multipart/form-data\" >
				<button><input style=\"color:black;\" type=\"file\" name=\"file\" required></button>
				<button style=\"color:black;\"><input type=\"submit\" value=\"Upload\" ></button>
			</form>
			
		</center>";

?>
<?php
}else echo "<h1>Please login first .</h1>";
?>
		

		
 



	
		
		
	

</body>
  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
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








