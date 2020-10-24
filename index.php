<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>Welcome to BookMyMovie</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<header id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			
			
				
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class=" fill " style="background-image:url('img/img1.jpeg');opacity:0.8;background-repeat: no-repeat;background-size:cover; "> 
						<h1 style = "color:white;text-align:center;font-size: 100px; "> SMART PARK</h1>
                       <h3 style="color:black;text-align:center;font-size: 50px;"> New Way Of Parking Your Vechiles </h3>
                       <p style = "text-align:center;font-size: 30px;color:black;text-align "> This is an app where you can directly book your parking slots in citys like Hyderbad,Delhi,Mumbai & Pune  in low prices with high comforts.</p>
					</div>
					   
				</div>
				
			</div>

			<!-- Controls -->
			
		</header>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="page-header">SMART PARKS IN INDIA</h2>
				</div>
				<div class="col-xs-12">
					<h5 class="center-align text-uppercase lead">COMING SOON</h5>
				</div>
				<div class="col-md-3 col-sm-6">
						<a href=" "><img class="img-responsive img-portfolio img-hover" src="img/img2.jpg" alt="" width="300" height="300"><h3>INDORE</h3></a>
				</div>
				<div class="col-md-3 col-sm-6">
						<a href=""><img class="img-responsive img-portfolio img-hover" src="img/img3.jpeg" alt="" width="300" height="300"><h3>JAIPUR</h3></a>
				</div>
				<div class="col-md-3 col-sm-6">
						<a href=""><img class="img-responsive img-portfolio img-hover" src="img/img4.jpg" alt="" width="300" height="300"><h3>TIRUPATI</h3></a>
				</div>
				<div class="col-md-3 col-sm-6">
						<a href=""><img class="img-responsive img-portfolio img-hover" src="img/img6.jpeg" alt="" width="300" height="300"><h3>KOLKATA</h3></a>
				</div>
			</div>
			<br><br><br>
		</div>

		<div class="bottom">
			<!-- Call to Action Section -->
			<div class="pre-footer small">
				<div class="row">
					<div class="col-xs-12">
						<h5 class="center-align bold" style="color:#555;">Book an experience with SMARTPARK!</h5>
					</div>
					<div class="row row-content">
						<div class="col-xs-12">
						Life has never been so convenient for a Parking buff! Remember the time, when you had to stand in a long queue outside the theatre to park you vechails? That time is gone now!With the emergence of SMARTPARK, India's biggest online parking portal, booking parking space  have become a cake walk. Now, enjoy  Just take out your mobile, launch the app, choose your, & show time and book tickets online, right away! So simple. Isn't it! We give you some more amazingly cool reasons why you should book your movie tickets here!
						</div>
					</div>
					
					
						
					</div>
				</div>
			</div>
		</div>

		<?php include 'components/footer.php';?>
		<script>
			$('.carousel').carousel({
				interval: 5000 //changes the speed
			})
		</script>
	</body>
</html>
