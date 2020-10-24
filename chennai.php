<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

	</head>
		
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header">Chennai
	          
	        </h1>
	        <ol class="breadcrumb">
	          <li><a href="index.php">Home</a></li>
	          
	        </ol>
	      </div>
	    </div>

	    <!-- Movie One -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Ala Vaikunthapurramuloo">
	          <img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=Ala Vaikunthapurramuloo" alt="Ala Vaikunthapurramuloo">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Spencer Plaza</h3>
			
	        <h4><i class="fa fa-star"></i> 4.2/5</h4>
	        <p>
					</p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Ala Vaikunthapurramuloo">Book Parking</a>
	      </div>
	    </div>
	    <hr>

	    <!-- Movie Two -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Bheeshma">
	          <img class="img-responsive img-hover poster" src="php/displayPoster.php?MovieName=Bheeshma" alt="Bheeshma">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Forum Vijaya Mall</h3>
				        <h4><i class="fa fa-star"></i> 4.3/5</h4>
	        <p>
	      
	        </p>
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Bheeshma">Book parking</a>
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
