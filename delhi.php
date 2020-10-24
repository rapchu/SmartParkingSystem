<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>SmartPark | Delhi</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header">New Delhi
	          
	        </h1>
	        <ol class="breadcrumb">
	          <li><a href="index.php">Home</a></li>
	         
	        </ol>
	      </div>
	    </div>

	    <!-- Movie One -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Dolittle">
	         <marquee> <img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=Dolittle" alt="Dolittle"><h1>Show Now</h1></marquee>
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Select City Walk Mall</h3>
			
	        <h4><i class="fa fa-star"></i> 4.3/5</h4>
	        <p>
				
					</p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Select City Walk Mall">Book parking</a>
	      </div>
	    </div>
	    <hr>

	    <!-- Movie Two -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=1917">
	          <marquee><img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=1917"<h1>Show Now</h1>

	          </marquee>
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3> DLF Promenade Mall</h3>
			
	        <h4><i class="fa fa-star"></i> 4.6/5</h4>
	        <p>
	       
	        </p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=1917">Book Parking</a>
	      </div>
	    </div>
	    <hr>

  	</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
	</body>
</html>