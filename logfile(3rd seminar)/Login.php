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
			 /* background: url("http://localhost/PHP/Thesis/img/girl.jpg") no-repeat center center fixed; */
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover; 

			/* background-color: gray; */

		}

		#parent{
			margin: 200px auto 0 auto;
			border-color: black;
		}

		#form_login{
			display: table-cell;
			text-align: center;
			vertical-align: middle;
		}

	input[type=text] {
      padding: 10px;
      width: 20%;
      border-radius: 12px;
    }
    input[type=password] {
      padding: 10px;
      width: 20%;
      border-radius: 12px;
    }
    input[type=submit] {
      display: inline-block;
      padding: 10px 15px;
      font-size: 17px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #fff;
      background-color: #4CAF50;
      border: none;
      border-radius: 12px;
      width: 22%;
    }
    input[type=submit]:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
    input[type=submit]:hover {
      background-color: #3e8e41
    }
    input{
      margin-bottom: 20px;
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
	<form id="dialog" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" ><!--  -->
	<!-- <table id="inputTable">
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
	</table> -->

		<label style="font-size: 30px;">Sign in to analyze</label><br><br>
		<input type="text" name="uname" placeholder="Email address"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <input type="submit" name="clicked" value="Sign in">
    </form>
  </div>
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

			$sql = "SELECT * FROM LOGIN WHERE Email = '$uName' AND Password = '$pwd' ";
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