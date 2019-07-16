<!DOCTYPE html>
<html>
<head>
	<title>PHP Program</title>
	<style>
		table{
			border-collapse: collapse;
		    border: 3px solid grey;
			width: 100%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
		}
		th{
			background-color: #d96459;
			color: white;
		}
		tr:nth-child(even) {background-color: #f2f2f2};
		td{
			text-align: center;
		}
	</style>
</head>
<body>
	<form action="simulator.php" method="POST">
		<input type="submit" name="submit" value="Simulation" style="width: 150px; height: 30px; color: green; background: black; font-size: 20px; position: relative; left: 600px; font-weight: bold; margin-top: 50px;">
	</form>

	<div class="table" style="padding-top: 50px;">
		<table border="1|8">
			<tr>
				<th>Cluster</th>
				<th>Node</th>
				<th>Motion</th>
				<th>Light</th>
				<th>Temperature</th>
				<th>Rain Guage</th>
				<th>Date</th>
				<th>Time</th>
			</tr>
		
			<?php

			date_default_timezone_set('America/Los_Angeles');

			if(isset($_POST['submit'])){
				$conn = mysqli_connect('52.53.161.121','tester','password','project_281');
				$mng = new MongoDB\Driver\Manager("mongodb://52.53.161.121:27017");
				$newtime = strtotime("04 October 2018");
				for($i=0; $i<200; $i++){
					// $motion = rand(0,2);
					// $light = $motion;
					// $temperature = rand(58,82);
					// $rain_guage = rand(0,33)/10;
					// $node = rand(1,5);
					// $cluster = rand(1,3);
					$date = date("Y-m-d", $newtime);
					$time = date("H-i-s", $newtime);

					for($cluster=1; $cluster<=3; $cluster++){
						for($node=1; $node<=5; $node++){
							$motion = rand(0,2);
							$light = $motion;
							$temperature = rand(55,95);
							$rain_guage = rand(4,30)/10;

							$year = substr($date, 0,4);
							$month = substr($date,5,2);

							$query = "INSERT INTO clusters (motion,light,temperature,rain_guage,date_curr,time_record,node,cluster,year,month) VALUES ('$motion','$light','$temperature','$rain_guage','$date','$time','$node','$cluster','$year','$month')";
							$result = mysqli_query($conn,$query);

							echo "<tr><td>".$cluster."</td><td>".$node."</td><td>".$motion."</td><td>".$light."</td><td>".$temperature."</td><td>".$rain_guage."</td><td>".$date."</td><td>".$time."</td></tr>";

							$insRec = new MongoDB\Driver\BulkWrite;
							$insRec->insert(['cluster' => $cluster, 'node'=> $node, 'motion'=> $motion, 'light'=> $light, 'temperature'=> $temperature, 'rain_guage'=> $rain_guage, 'date_curr'=> $date, 'time_record'=> $time, 'year' => $year, 'month' => $month]);
						    $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);   
						    $result = $mng->executeBulkWrite('project_281.cluster', $insRec, $writeConcern);
						}	
					}
					$hours = 6;
					$newtime = $newtime + ($hours * 60 * 60); // hours; 60 mins; 60secs
					// echo date('Y/m/d H:i:s', $newtime)."<br>";

					// $start = strtotime("10 September 2001");
					// $timestamp = mt_rand($start, time());
					// $date = date("Y-m-d", $timestamp);
					// $year = substr($date, 0,4);
					// $month = substr($date,5,2);
					// echo $month."<br />";
					// echo $year."<br />";
					// echo $date."<br />";

					// $startTime = "00:00:00";
					// $timeStamp = mt_rand($startTime, time());
					// $time = date("H:i:s", $timeStamp);

					// $time1 = rand(00,24);
					// $time2 = rand(00,60);
					// $time3 = rand(00,60);

		 		// 	$time = $time1.":".$time2.":".$time3."<br>";

					// $query = "INSERT INTO clusters (motion,light,temperature,rain_guage,date_curr,time_record,node,cluster,year,month) VALUES ('$motion','$light','$temperature','$rain_guage','$date','$time','$node','$cluster','$year','$month')";
					// $result = mysqli_query($conn,$query);

					// echo "<tr><td>".$cluster."</td><td>".$node."</td><td>".$motion."</td><td>".$light."</td><td>".$temperature."</td><td>".$rain_guage."</td><td>".$date."</td><td>".$time."</td></tr>";
			}
		}
			?>
		</table>
	</div>
</body>
</html>