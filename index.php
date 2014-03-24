<!DOCTYPE html>
<html>
	<head>
		<title>HELP CAT Carpool</title>
		<style type="text/css">
			html {
				width: 80%;
				margin: 0 auto;
			}

			.mapbox {
				max-width: 450px;
				width: 100%;
			}
		</style>
	</head>
	<body>
		<h1>HELP CAT Car Pool Database</h1>
		<!-- Google Map Embed -->
		<iframe class="mapbox" 
		  width="500"
		  height="500"
		  frameborder="0" style="border:0"
		  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDsA-rWJVhqWo5XhCH3f6eOwjQol2hyCCc
		    &q=HELP+College+of+Arts+and+Technology">
		</iframe>
		<?php include "form.php" ?>
	</body>
<html>

<?php
	#PHP Function and connection
	include 'function.php';

	#Form insertion
	queryInsert($con, "test", array('name', 'address'),array("$_POST[name]", "$_POST[address]"));
	//queryDisplay(queryAll($con, "test"));
?>	
