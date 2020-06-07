<?php
session_start();
?>
<html>
<head>
<title>Delete Notices</title>
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
              <a href="Queries.php">
                <span class="glyphicon glyphicon-question-sign"></span><br class="hidden-xs">Queries</a>
            </li>
			
			<li>
              <a href="noticeupload.php">
                <span class="glyphicon glyphicon-upload"></span><br class="hidden-xs"> Notice Uploads</a>
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


// This will return all files in that folder
// If you are using windows, first 2 indexes are "." and "..",
// if you are using Mac, you may need to start the loop from 3,
// because the 3rd index in Mac is ".DS_Store" (auto-generated file by Mac)
$files = scandir("uploads");
?>


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