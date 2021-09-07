<!DOCTYPE html>

<?php
//Step1
 $db = mysqli_connect('127.0.0.1','root','root','WearableData')
 or die('Error connecting to MySQL server.');
?>

<html>
<head><link href="css/projectStyle.css" type = "text/css" rel="stylesheet">
<title>Home</title>
</head>

<body>
	<header>
    <img src="images/siteName.png" width="450" height="100"/>



	</header>
	<nav>
		<a href="index.php">Home</a>
  		<a href="#worldwide.html">Worldwide</a>
 	 	<a href="#logdata.html">Log Data</a>
	</nav>



	<h2 class ="welcome">
		<?php
				$query = "SELECT * FROM Person1";
				mysqli_query($db, $query) or die('Error querying database.');
				$result = mysqli_query($db, $query);
				$row = mysqli_fetch_array($result);


	 			echo 'Hello, ' . $row['firstName'] . ' ';


		?>
	</h2>

	<section class = "widget">
	<br>
	<br>
	<h3>Max Heart Rate</h3>
	<div class="human-heart">
		<div class="container"><img src="images/heart2.png" class="human-heart" alt="human heart" width="100" height="100"/>
		</div>
		<div class="top"> 	<?php
				$query = "SELECT * FROM Person1";
				mysqli_query($db, $query) or die('Error querying database.');
				$result = mysqli_query($db, $query);
				$row = mysqli_fetch_array($result);


	 			echo $row['maxHeartRate'] . ' '; ?>


		</div>

	</div>


	</section>
  <br>
  <section class = "widget">
  <br>
  <h3>
    <?php
        $query = "SELECT * FROM Person1";
        mysqli_query($db, $query) or die('Error querying database.');
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);


        echo 'Good Job, ' . $row['firstName'] . '!';
    ?>
    <br>
    <?php
      $query = "SELECT * FROM Person1";
      mysqli_query($db, $query) or die('Error querying database.');
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_array($result);
      echo 'You are .... '. 'away from your goal steps!';
    ?>
  </h3>
  <div class="steps"><img src="images/robot.png" width="160" height="150"/>

  </div>


  </section>



</body>



</html>
