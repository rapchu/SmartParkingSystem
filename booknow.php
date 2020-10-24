<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>
		<link href="css/booknow.css" rel="stylesheet">

		<title>Smart Park</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Book Now</h1>
				</div>
			</div>

			<!-- Content Row -->
			<div class="row">
				<div class="col-md-8">
					<p>Choose your booking preferences here and proceed to receive your unique Booking ID which you can show at the Mall Office and we will help ypu to park the vehicle</p>
					
				</div>
			</div>
			<br>

			<!-- BookMovie Form -->
			<div class="row">
				<div class="col-md-8">
					<form name="bookingForm" id="bookingForm" action="booksuccess.php" method="POST" novalidate>
					
						<div class="control-group form-group">
							<div class="controls">
								<label>Choose your Place:</label>
								<select class="form-control" id="theatre" name="theatre" required>
									<option value="0" name="theatre1" selected>INOX</option>
									<option value="1" name="theatre2">Inorbit Mall</option>
									<option value="2" name="theatre3">Forum Mall</option>
									<option value="3" name="theatre4">Escape</option>
								</select>
								<p class="help-block"></p>
							</div>
						</div>
						
						<div class="control-group form-group">
							<div class="controls">
								<label>Choose your Time</label>
								<select class="form-control" id="timing" name="timing" required>
									<option value="0" name="timing1" selected>One Hour</option>
									<option value="1" name="timing2">Three Hours</option>
									<option value="2" name="timing3">Half Day</option>
									<option value="3" name="timing4">Full Day</option>
								</select>
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Number of tickets:</label>
								<input type="number" min="1" max="10" class="form-control" id="ticket" value="1" required>
							</div>
						</div>
						<div id="visible">
							<h3 class="text-center" style="min-height:80px;">
							<strong>Total Amount:</strong>
							<p id="amount">&#8377; 200.00</p>
							</h3>
							<small class="help-block">You cannot change these options once you proceed.</small>
							<button type="button" id="btnTicket" class="btn btn-danger">Confirm and proceed &raquo;</button>
						</div>
						<div id="invisible">
							<p><strong>Choose Parking Space by clicking the corresponding seat in the layout below:</strong></p>
							<div id="holder">
								<ul id="place">
									<li class="seat row-0 col-0 selectedSeat" style="top:0px;left:0px"><a title="1">1</a></li>
								</ul>
							</div>
							<div>
								<ul id="seatDescription" style="list-style-type:none;">
									<li><span><img src="img/empty_car.jpeg" height="24px"></span> Available Space</li>
									<li><span><img src="img/car_booked.jpeg" height="24px"></span> Booked Space</li>
									<li><span><img src="img/filled_car.jpeg" height="24px"></span> Selected Space</li>
								</ul>
							</div>
							<br>
							

							<br>
							<h3 class="text-center" style="min-height:80px;">
							<strong>Total Amount:</strong>
							<p id="amountTotal">&#8377; 120.00</p>
							</h3>

							<div id="success"></div>
							<!-- For success/fail messages -->
							<br><br>
							<button type="submit" id="btnBook" class="btn btn-danger btn-block" >Book Space</button>

						</div>
					</form>
				</div>

			</div>

  	</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
		<script src="js/booknow.js"></script>
	</body>
</html>
