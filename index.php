<!DOCTYPE html>
<html>
<head>
	<title>Carrillo-Assign1</title>
</head>
<body>
	<h1>Bids Project</h1>
	<h6>Cortland Carrillo PHP and MySQL</h6>

	<!-- Read in all Data -->
	<?php 
		include("reader.php");
		$reader = new Reader();
	?>

	<!-- Display data as a table -->
	<table>
		<?php 
			include("display.php");
			$display = new Display($reader->getAllData());
			$display->displayAllData(); 
		?>
	</table>
	
	<!-- Display form to user to enter bids -->
	<form action="process.php" method="POST">
		<table><?php $display->displayForm(); ?></table>
		<div class="form-group">
			<label>Please enter in shipping address:</label>
			<input type="text" name="address">
		</div>
		<div><input type="submit" value="Submit"></div>
	</form>
</body>
</html> 