<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>Smart Park</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header"><p>About Mall</p><h3>This is the biggest mall in the city,Hope you will enjoy with yoy family and friends</h3>
	        </h1>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-md-8">
	        
				
					
	        
						<?php
							if(isset($_SESSION["user_name"])) {
		        		echo '<a class="btn btn-danger" href="booknow.php">Book Now</a>';
							}
							else {
								echo '<a class="btn btn-danger" href="#loginModal" data-toggle="modal" data-target="#loginModal" id="btn">Book Now</a>';
							}
						?>
	      </div>
	    </div>

	    <!-- Show Timings Row -->
	    <div class="row">
	      <div class="col-lg-12">
	        <h3 class="page-header">Price</h3>
	      </div>

	      <div class="col-sm-3 col-xs-6">
	        <p>One Hour</p>
	        <small>&#8377; 120.00</small>
	      </div>

	      <div class="col-sm-3 col-xs-6">
	        <p>Three Hours</p>
	        <small>&#8377; 200.00</small>
	      </div>

	      <div class="col-sm-3 col-xs-6">
	        <p>Half Day</p>
	        <small>&#8377; 500.00</small>
	      </div>

	      <div class="col-sm-3 col-xs-6">
	        <p>Full Day</p>
	        <small>&#8377; 900.00</small>
	      </div>
	    </div>

  	</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
	</body>
</html>
