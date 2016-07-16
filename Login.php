 <?php
	session_start();
	$valid = isset($_SESSION['auth']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		

		body {
			 background: url("http://localhost/PHP/Thesis/img/morning_sunset.jpg") no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover; 

			/* background-color: gray; */

		}

		#parent{
			margin: 200px auto 0 auto;
		}

		#form_login{
			display: table-cell;
			text-align: center;
			vertical-align: middle;
		}
	</style>
</head>
<body>
	<div align="center" id="parent">
	<?php 
		if($valid){
			header('location: Home.php');
			//echo "valid";
			//echo "Hello<a href='Logout.php'>Logout</a>";
		}else {
			header('locatin: Login.php');
			//echo "not valid";
		} 
	?>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" ><!--  -->
	<table id="inputTable">
		<tbody>
			<tr>
				<td>
					<label>Username</label>
				</td>
				<td>
					<input type="text" name="uname" placeholder="username">
				</td>
			</tr>
			<tr>
				<td>
					<label>Password</label>
				</td>
				<td>
					<input type="password" name="pwd" placeholder="password">
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<button type="submit" name="clicked" >Login</button>
				</td>
			</tr>
		</tbody>
	</table>
	</form>
	</div>

	<?php
		include("DB Connect.php");

		if( !empty($_POST['uname']) && !empty($_POST['pwd']) ){
			$uName = $_POST['uname'];
			$pwd = $_POST['pwd'];

			/*$uName = "Ko Myo";
			$pwd = "123";*/
			/*if( $uName == "Ko Myo" && $pwd == "123" ){
				echo "Logined";
			}else {
				echo "Fail";
			}*/

			//echo "User typed username and password are : ".$uName."   ".$pwd;

			$sql = "SELECT * FROM LOGIN WHERE Uname = '$uName' AND Password = '$pwd' ";
			//$sql = "SELECT * FROM LOGIN ";
			$result = mysqli_query( $conn , $sql );

			$data = mysqli_fetch_array($result,MYSQLI_ASSOC);
			echo $data['Uname']."	".$data['Password'];

			$row = mysqli_num_rows($result);
		
			//echo mysqli_num_rows($result);
			if( $row > 0 ){
				$_SESSION['auth'] = true;
				$_SESSION['id'] = $uName;

				//echo "Login Success";
				//header('location: Welcome.php');
				header('location: Login.php');
			}else {
				//echo "Login Fail";
			}
		}
?>
</body>
</html>