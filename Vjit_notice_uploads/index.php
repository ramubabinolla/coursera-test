<html>
<title> HOME </title>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>


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
              <a href="#pageB">
                <span class="glyphicon glyphicon-picture"></span><br class="hidden-xs">Gallery</a>
            </li>
			
			<li>
              <a href="#pageE">
                <span class="glyphicon glyphicon-question-sign"></span><br class="hidden-xs"> Queries</a>
            </li>
			
            <li>
              <a href="#pageD">
                <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About Us</a>
            </li>
            
			
			<li id="navMenuButton">
              <a href="login.php" onclick="$dc.loadMenuCategories();">
                <span class="glyphicon glyphicon-log-in"></span><br class="hidden-xs">Admin Login</a>
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

			
 
		
		
		<section id="pageA">
		   
			<marquee behavior=scroll scrollamount="15"><h3 style="color:Tomato;">
			 
					
						<?php
						$files = scandir("uploads");
						?>
						
						<table align="center" border="0" style="color:Tomato; font-size:30px;" >
						
						<?php
						for ($a = 2; $a < count($files); $a++)
						{
							?>
							<tr>
							
								<td>
								<!-- Displaying file name !-->
								<?php echo ($files[$a]); ?>
								</td>
								<td>
									<a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
										Click her to download
									</a>
								</td>
								
							</tr>
						<?php
						}
						?>

						</table>
					
	
		
		</h3></marquee>
		
		</section>
	
		<section id="pageB">
			<h1><b>Gallery</b></h1>
			<! -- gallery-->
								<div class="container">
					  
					  <div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						  <li data-target="#myCarousel" data-slide-to="1"></li>
						  <li data-target="#myCarousel" data-slide-to="2"></li>
						  <li data-target="#myCarousel" data-slide-to="3"></li>
						  <li data-target="#myCarousel" data-slide-to="4"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">

						  <div class="item active">
							<img src="images/sciencefair.jpg"  style="width:100%; height:650px;">
							<div class="carousel-caption">
							  <h3>Science Fair</h3>
							  
							</div>
						  </div>

						  <div class="item">
							<img src="images/independenceday.jpg"  style="width:100%;  height:650px;">
							<div class="carousel-caption">
							  <h3>Independence Day</h3>
							  
							</div>
						  </div>
						
						  <div class="item">
							<img src="images/foodfest.jpg"  style="width:100%;">
							<div class="carousel-caption">
							  <h3>Food Festival</h3>
							  
							</div>
						  </div>
						  <div class="item">
							<img src="images/teeplantation.jpg" style="width:100%; height:650px;">
							<div class="carousel-caption">
							  <h3>Tree Plantation</h3>
							  
							</div>
						  </div>
						  <div class="item">
							<img src="images/bathkuamma.jpg"  style="width:100%; height:650px;">
							<div class="carousel-caption">
							  <h3>Bathkuamma celebration</h3>
							  
							</div>
						  </div>
					  
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						  <span class="glyphicon glyphicon-chevron-left"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
						  <span class="glyphicon glyphicon-chevron-right"></span>
						  <span class="sr-only">Next</span>
						</a>
					  </div>
					 </div>
		</section>

		<section id="pageC">
		
	
		</section>

		<section id="pageD">
			<h1><b>About Us</b></h1>
			<center>
		
			<div class="container">
				  <img src="images/prince.jpg" alt="Avatar" style="width:400px">
				  <p>Mr. Takkalapally Pramod Rao</p>
				  <p>Founder, Chairman, Origin Techno School</p>
				  <p>Born in a middle class agricultural family, Takkalapally Pramod Rao observed during his educational career, how and why most of his friends had become dropouts from schools and colleges due to lack of guidance and direction</p>
				</div>
			<h3> our School is an educational institution designed to provide learning spaces and learning environments for the teaching of students<br>
			(or "pupils") under the direction of teachers. Most countries have systems of formal education, which is commonly compulsory. <br><br>
			In these systems, students progress through a series of schools. The names for these schools vary by country (discussed in the Regional section below)<br>
			but generally include primary school for young children and secondary school for teenagers who have completed primary education.
			</h3>
			<center>
			
			
		</section>

		<section id="pageE">
					<!--Section: Contact v.2-->
			
					
					 <section class="mb-4">

					<!--Section heading-->
					<h2 class="h1-responsive font-weight-bold text-center my-4"><b>Any Questions</b></h2>
					<!--Section description-->
					<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
						a matter of hours to help you.</p>
					
					<div class="row">

						<!--Grid column-->
						<div class="col-md-9 mb-md-0 mb-5">
							<form id="contact-form" name="contact-form" action="contact.php" method="POST">

								<!--Grid row-->
								<div class="row">

									<!--Grid column-->
									<div class="col-md-6">
										<div class="md-form mb-0">
											<input type="text" id="name" name="name" class="form-control" required="name">
											<label for="name" class="">Your name</label>
										</div>
									</div>
									<!--Grid column-->

									<!--Grid column-->
									<div class="col-md-6">
										<div class="md-form mb-0">
											<input type="text" id="email" name="email" class="form-control" required="email">
											<label for="email" class="">Your email</label>
										</div>
									</div>
									<!--Grid column-->

								</div>
								<!--Grid row-->

								<!--Grid row-->
								<div class="row">
									<div class="col-md-12">
										<div class="md-form mb-0">
											<input type="text" id="subject" name="subject" class="form-control" required="subject">
											<label for="subject" class="">Subject</label>
										</div>
									</div>
								</div>
								<!--Grid row-->

								<!--Grid row-->
								<div class="row">

									<!--Grid column-->
									<div class="col-md-12">

										<div class="md-form">
											<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required="message"></textarea>
											<label for="message">Your message</label>
										</div>

									</div>
								</div>
								<!--Grid row-->

							</form>

							<div class="text-center text-md-left">
								<a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();" >Submit</a>
							</div>
							<div class="status"></div>
						</div>
					   
						<div class="col-md-3 text-center">
						   
						</div>
						<!--Grid column-->

					</div>
					

				</section>
				</center>
				<!--Section: Contact v.2-->
		</section>
		

		
 



	
		
		
		<footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="hours" class="col-sm-4">
          <span>Hours:</span><br>
          Mon-sat: 08:00am - 4:00pm<br>
          Sunday  Closed
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-sm-4">
          <span>Address:</span><br>
          Patancheru Industrial Area<br> Patancheru,<br> Hyderabad,<br> Telangana ,502319.

          <hr class="visible-xs">
        </section>
        <section id="testimonials" class="col-sm-4">
		<span>Contact us:</span><br>
		<p>Email : <a href="mailto:Origin@ots.com">Origin@ots.com</a></p>
		<br><p>Phone :<a href="tel:998979 11678">99897 91168</a></p>
		
          
        </section>
      </div>
      <div class="text-center"><p > Copyright &copy; 2020. Origin Techno School. All Right Reserved</p> </div>
    </div>
  </footer>

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
#pageD{background:#3B0B24; } 
#pageE{background:#0B2161;}

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

h1{color:#FBF2EF; text-align: center; margin-top:150px;}




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

 
</style>








