<!-- <html>
	<head>
		<title>Database Connection with MySQL</title>
	</head>
	<body>
		<?php
			/*$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "admin";
			$dbname = "Log_file_analysis";

			$conn = mysql_connect( $dbhost , $dbuser , $dbpass );
			$check = mysql_select_db( $dbname , $conn );
			//echo mysql_select_db( $dbname , $conn );

			if( $check ){
				echo " Databse Connected successfully with MySQL .<br>";
			}
			else {
				echo " Database Connection Failed with MySQL .<br>" ;
				die( 'Could not connect: ' . mysql_error() );
			}

			//mysql_close( $conn );
			//echo mysql_close( $conn );*/
		?>
	</body>
</html> -->

<html>
	<head>
		<title>Database Connection with MySQLi OOP</title>
	</head>
	<body>
		<?php
			$dbhost = "localhost" ;
			$dbuser = "root" ;
			$dbpwd = "admin" ;
			$dbname = "Log_file_analysis";
			
			$conn = mysqli_connect( $dbhost , $dbuser , $dbpwd , $dbname );
			if ( $conn->connect_error )
			{
				die( " Database Connection Failed with MySQLi OOP ." . $conn->connect_error );
			}else {
				//echo " Databse Connected successfully with MySQLi OOP .";
			}
		?>
	</body>
</html>