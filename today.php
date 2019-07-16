<html>
	<head>
		<title>Smart Street</title>
		
		<link href="bootstrap4/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
		<link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="font-awesome/font-awesome/css/font-awesome.min.css">
		<link href="style.css" rel="stylesheet" type="text/css">

	</head>

	<body>
		<header>
			<div class="row">
				<div class="logo">
					<img src="cloud-pic.png">
				</div>

				<ul class="main-nav">
					<li><a href="main-page.php">Home</a></li>
					<li><a href="">Products/Services</a></li>
					<li><a href="">News</a></li>
					<li><a href="">Contacts</a></li>
				</ul>
			</div>
			<br><br><br>
			<h1><center><br>Enter Date:</center> </h1>
			<br>	
			<form action = "sensor-day.php" method="post">
				<h1>
				<pre>
				<label for="date"></label>
				<input type="date" name="date" id="date"><br><br>
				<br><center><h1>Select the Sensor</center>
				
				<select name="sensor-type" method="post">
    				<option value="Light">Light</option>
    				<option value="Motion">Motion</option>
    				<option value="Temperature">Temperature</option>
    				<option value="Rain Gauge">Rain Gauge</option>
  				</select>
  				<br><br>
  				<input type="submit" name="submit">
			</form>

		</h1>
		</header>

	<script type="text/javascript" src="bootstrap.min.jss"></script>
	</body>
</html>