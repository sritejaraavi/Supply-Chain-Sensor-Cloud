<html>
	<head>
		<title>Smart Street</title>

		<style type>
		table
		{
			border-collapse: collapse;
			width: 80%;
			color: #af0970;
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
			color: yellow;
		}

		tr
		{
			nth-child(even) {background-color: #e7ebfc}
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
			</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<h1><center>Scroll Down for the Results</center></h1>
		</header>
		
		<?php
			
			// Create connection
			$conn = mysqli_connect('54.193.22.204','tester','password','project_281');
			// Check connection
			if ($conn->connect_error)
			{
    			die("Connection failed: " . $conn->connect_error);
			} 
			$select = $_POST['sensor-type'];
			$month = $_POST['month'];

			$sql = "SELECT * FROM clusters where date_curr between '$month-01' and '$month-31'";
			$result = $conn->query($sql);		

					echo "<table border=1>
						 <tr>
							<th>Cluster</th>
							<th>Node</th>
							<th>$select</th>
							<th>Year</th>
							<th>Date Current</th>
						</tr><br><br>";

					if($result->num_rows>0)
					{
						while($row = $result->fetch_assoc())
						{
							echo "<tr>";
							echo "<td>".$row["cluster"]."</td>";
							echo "<td>".$row["node"]."</td>";
							echo "<td>".$row["motion"]."</td>";
							echo "<td>".$row["year"]."</td>";
							echo "<td>".$row["date_curr"]."</td>";
							echo "</tr>";
						}
						echo "</table>";
					}
					else
					{
						echo "0 result";
					}

					$conn->close();
		?>

				
	<script type="text/javascript" src="bootstrap.min.jss"></script>
	</body>
</html>