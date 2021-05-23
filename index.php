<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Date Time Display</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Orbitron');

		body {
		  background-color: #121212;
		  color: #fff;
		}

		.date{
		font-family: 'Orbitron', sans-serif;
		  color: #8566ff;
		  font-size: 28px;
		  text-align: left;
		  width: 245px;
		    float: left;
		    margin-left: 35%;
		}
		#clock {
		  font-family: 'Orbitron', sans-serif;
		  color: #8566ff;
		  font-size: 28px;
		  width: 240px;
		  float: left;
		}
	</style>
</head>
<body>
	<h1>Date Time</h1>		
<?php
echo date('Y-m-d'); 
echo "<br>";
$date = date_create(date('Y-m-d H:i:s'));
// $date = date('Y-m-d');
echo date_format($date, 'Y-m-d H:i:s:A').'<br>';
$date = new DateTime('2000-01-01', new DateTimeZone('Pacific/Nauru'));
echo $date->format('Y-m-d H:i:sP') . "\n";

$date->setTimezone(new DateTimeZone('Pacific/Chatham'));
echo $date->format('Y-m-d H:i:sP') . "\n";


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$Object = new DateTime();  
$Object->setTimezone(new DateTimeZone('GMT+6'));
$DateAndTime = $Object->format("d-m-Y");
echo "<h3>The current date and time in Dhaka are $DateAndTime. </h3>\n";
?>
	<div class="date">
		<?php 
			$Object = new DateTime();  
			$Object->setTimezone(new DateTimeZone('GMT+6'));
			$DateAndTime = $Object->format("d-m-Y");
			echo($DateAndTime);
		?>
	</div>
	<div id="clock"></div>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script>
		function currentTime() {
		  var date = new Date(); /* creating object of Date class */
		  var hour = date.getHours();
		  var min = date.getMinutes();
		  var sec = date.getSeconds();
		  var midday = "AM";
		  midday = (hour >= 12) ? "PM" : "AM"; /* assigning AM/PM */
		  hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12): hour); /* assigning hour in 12-hour format */
		  hour = updateTime(hour);
		  min = updateTime(min);
		  sec = updateTime(sec);
		  document.getElementById("clock").innerText = hour + " : " + min + " : " + sec + " " + midday; /* adding time to the div */
		    var t = setTimeout(currentTime, 1000); /* setting timer */
		}

		function updateTime(k) { /* appending 0 before time elements if less than 10 */
		  if (k < 10) {
		    return "0" + k;
		  }
		  else {
		    return k;
		  }
		}

		currentTime();

</script>
</body>
</html>