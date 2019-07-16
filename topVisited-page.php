<html>
	<head>
		<title>Food</title>
		<link href="bootstrap4/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
		<link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="font-awesome/font-awesome/css/font-awesome.min.css">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>	
		<header>
			<div class="row">
				<ul class="main-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="products.php">Products/Services</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="getContacts.php">Contacts</a></li>
					<li><a href="secure.php">Admin</a></li>
				</ul>
			</div>

				<?php

					$diff_donut = 0;
					$diff_pie = 0;
					$diff_cupcake = 0;
					$diff_icecream = 0;
					$diff_pastry = 0;
					$diff_cookie = 0;
					$diff_eclaire = 0;
					$diff_smore = 0;
					$diff_milkshake = 0;
					$diff_pudding = 0;
					$diff_sandwich = 0;
					$diff_brownie = 0;

					if(isset($_COOKIE['donut1']))
					{
					    $diff_donut =  $_COOKIE['donut1'];
					}

					if(isset($_COOKIE['pie1']))
					{
						$diff_pie =  $_COOKIE['pie1'];
					}

					if(isset($_COOKIE['cupcake1']))
					{
						$diff_cupcake =  $_COOKIE['cupcake1'];
					}			
					
					if(isset($_COOKIE['icecream1']))
					{
						$diff_icecream =  $_COOKIE['icecream1'];
					}

					if(isset($_COOKIE['pastry1']))
					{
						$diff_pastry =  $_COOKIE['pastry1'];
					}

					if(isset($_COOKIE['cookie1']))
					{
						$diff_cookie =  $_COOKIE['cookie1']; 
					}

					if(isset($_COOKIE['eclaire1']))
					{
						$diff_eclaire =  $_COOKIE['eclaire1'];
					}

					if(isset($_COOKIE['smore1']))
					{
						$diff_smore =  $_COOKIE['smore1']; 
					}

					if(isset($_COOKIE['milkshake1']))
					{
						$diff_milkshake =  $_COOKIE['milkshake1'];
					}

					if(isset($_COOKIE['pudding1']))
					{
						$diff_pudding =  $_COOKIE['pudding1'];
					}

					if(isset($_COOKIE['sandwich1']))
					{
						$diff_sandwich =  $_COOKIE['sandwich1'];
					}							
					
					if(isset($_COOKIE['brownie1']))
					{
						$diff_brownie =  $_COOKIE['brownie1']; 
					}	
					
					$arr = array(
						$diff_donut => "Donuts",
						$diff_pie => "Pies",
						$diff_cupcake => "Cupcakes",
						$diff_icecream => "Ice Creams",
						$diff_pastry => "Pastries",
						$diff_cookie => "Cookies",
						$diff_eclaire => "Eclaires",
						$diff_smore => "Smores",
						$diff_milkshake => "Milkshakes",
						$diff_pudding => "Puddings",
						$diff_sandwich => "Ice cream Sandwich",
						$diff_brownie => "Brownies",
					);

					krsort($arr);
					$limit = 5;
					$i = 0;
					echo "<br><br><br><br><h1>Top 5 viewed products - <br></h1>";
					foreach($arr as $key=>$val)
					{
						if($i<$limit && $key>0)
						{
							echo "<h1>";
							$num = $i+1;
							echo "$num. $val : Visited $key times<br>";
							echo "</h1>";
							$i++;
						}
					}
				?>
			</div>
		</header>
		
	<script type="text/javascript" src="bootstrap.min.jss"></script>
	</body>
</html>







