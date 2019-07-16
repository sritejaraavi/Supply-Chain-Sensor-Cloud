<html>
	<head>
		<title>Smart Street</title>		
		<style>
		table
		{
			border-collapse: collapse;
			width: 80%;
			color: #0970AF	;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
			margin-right: auto;
			margin-left: auto;
		}

		th
		{
			border: 1px solid #ddd;
			padding-top: 12px;
			padding-bottom: 12px;
			padding-left: 12px;
			background-color: #0970AF;
			color: white;
		}

		tr
		{
			nth-child(even) {background-color: #f2f2f2}
		}

	</style>

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

			<div class="hero">
				<h1 class="text-center"> Scroll down to view our Sensor data
				</h1>
			</div>
			</header>

				<br><br><br>
				<?php
					$conn = mysqli_connect('52.53.161.121','tester','password','project_281');

					if($conn->connect_error)
					{
						die("Connection failed".$conn->connect_error);
					}

					$sql = "SELECT * FROM clusters where date_curr='2004-01-11' or date_curr='2004-01-12' or date_curr='2004-01-13' or date_curr='2004-01-14' or date_curr='2004-01-15' or date_curr='2004-01-16' or date_curr='2004-01-17'";
					$result = $conn->query($sql);

					echo "<table border=1>
						 <tr>
						 	<th>Cluster</th>
							<th>Node</th>
							<th>Temperature</th>
							<th>Year</th>
							<th>Date Current</th>
						</tr>";


					if($result->num_rows>0)
					{
						while($row = $result->fetch_assoc())
						{
							echo "<tr>";
							echo "<td>".$row["cluster"]."</td>";
							echo "<td>".$row["node"]."</td>";
							echo "<td>".$row["temperature"]."</td>";
							echo "<td>".$row["year"]."</td>";
							echo "<td>".$row["date_curr"]."</td>";
							echo "</tr>";
						}
						echo "<br>";
						echo "</table>";
					}
					else
					{
						echo "0 result";
					}

					$conn->close();

				?>
			</h1>		
	

	<script type="text/javascript" src="bootstrap.min.jss"></script>
	</body>
</html>