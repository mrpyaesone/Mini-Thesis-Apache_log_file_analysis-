<?php
$name = $_FILES["logFile"]["name"];
$tmp = $_FILES["logFile"]["tmp_name"];
$type = $_FILES["logFile"]["type"];

if( $type == "application/octet-stream" ) {
	move_uploaded_file($tmp, "$name");

	echo "<center><h1>Log file name you want to analyze is ".$name.".\nPlease Wait a second.</h1></center>";

	$temp = shell_exec("/var/www/html/PHP/Thesis/Learning/logfile/Run.sh $name 2>&1");

	//echo $temp."<br>";
	//console.log();

	header("Refresh: 10; URL = Home (copy).php");
} else {
	echo "<p style='color:red'>Invalid file format!",
			"Please <a href='index.php'>try again</a>.</p>";
}
?>