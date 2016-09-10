<?php
	include("DB Connect.php");

	if ( (!empty($_POST['fname']) || !empty($_POST['lname'])) && !empty($_POST['email']) && !empty($_POST['pwd']) ) {
		$fName = $_POST['fname'];
		$lName = $_POST['lname'];
		$name = $fName . " " . $lName;
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];

		$sql = "INSERT INTO LOGIN (First_name, Last_name, Uname, Email, Password) VALUES ('$fName', '$lName', '$name', '$email', '$pwd')";

		$resultQ = mysqli_query($conn, $sql);

		if ( $resultQ ) {
			//echo "Success insert query.";
			header('location: SuccessSignUp.html');
		} else {
			//echo "Fail insert query.";
		}
		
	} else {
		echo "Require input.";
	}
	
	mysqli_close($conn);
?>