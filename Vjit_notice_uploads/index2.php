<?php
session_start();
?>
<html>
<head>
<title>Admin Logedin</title>
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
		
		<div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li id="navHomeButton" class="visible-xs active">
              <a href="index.php">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
			
            <li>
              <a href="#pageQ">
                <span class="glyphicon glyphicon-question-sign"></span><br class="hidden-xs">Queries</a>
            </li>
			
			<li>
              <a href="#pageNU">
                <span class="glyphicon glyphicon-upload"></span><br class="hidden-xs"> Notice Uploads</a>
            </li>
			
			<li>
              <a href="#PageDN">
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
<?php
if($_SESSION["name"]) {
$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "admin";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db);

	// Check connection
	if (!$conn) 
	{
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM contactus";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
	?>
	<section id="pageQ" style="background-color:black; height:450px;">
		<h2 align="center">Queries List</h2>
		<table align="center" border="1">
			<tr>
				<th>S.No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Message</th>
			</tr>
	<?php
		$i=1;
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) 
	    {
		$mailto=$row["cemail"]
	?>
		<tr>
			<td>
				<?php echo $i; ?>
			</td>
			<td>
				<?php echo $row["cname"]?>	
        		</td>
			<td>	
				<?php echo ("<a href=\"mailto:$mailto\">".$row["cemail"]."</a>")?>
        		</td>
			<td>
				<?php echo $row["csubject"]?>	
        		</td>
			<td>
				<?php echo $row["cmessage"]?>	
        		</td>
		</tr>
	<?php
		$i++;
	    }	
	?>
		</table>
			<?php	
	} 
	else 
	{
    		echo "0 results";
	}
	mysqli_close($conn);

?>
		</section>
		<br>
		<br>
		<br>
		<section id="pageNU" style="background-color:black; height:450px;">
		<?php 
		echo"<center>
		<h2>Upload Files</h2>
		<h4>Before uploding the file Please Rename the file to be understandable manner related to Notice</h4>
			<form method=\"POST\" action=\"upload.php\" enctype=\"multipart/form-data\" >
				<button><input style=\"color:black;\" type=\"file\" name=\"file\" required></button>
				<button style=\"color:black;\"><input type=\"submit\" value=\"Upload\" ></button>
			</form>
			
		</center>";
		?>
		
		</section>
		<br>
		<br><br>
		
		<section id="PageDN" style="background-color:black; height:450px;">
		
				<?php
						$files = scandir("uploads");
				?>

				<center><h2>Delete Notices</h2></center>
				<table align="center" border="1">
					<tr>
					  
							<th>File </th>
							<th>Download file</th>
							<th>Delete file</th>
					</tr>
					<?php
				for ($a = 2; $a < count($files); $a++)
				{
					?>
					<tr>
					
						<td>
						<!-- Displaying file name !-->
						<?php echo $files[$a]; ?>
						</td>

						<!-- href should be complete file path !-->
						<!-- download attribute should be the name after it downloads !-->
						<!--<a href="uploads/<?php echo files[$a]; ?>" target="_blank" > view  </a>-->
						<td>
						<a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
							Download
						</a>
						</td>
						<td>
							<a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
							Delete
							</a>
						</td>
					</tr>
					
					<?php
				}
				?>
		</section>
		<br>
	

<?php
}else echo "<h1>Please login first .</h1>";
?>

</body>
<!-- jQuery (Bootstrap JS plugins depend on it) -->
 
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ajax-utils.js"></script>
  <script src="js/script.js"></script>
</html>