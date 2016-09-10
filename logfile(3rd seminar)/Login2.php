<?php
  session_start();
  $valid = isset($_SESSION['auth']);
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>
<?php 
      if($valid){
        header('location: Home.php');
        //echo "valid";
        //echo "Hello<a href='Logout.php'>Logout</a>";
      }else {
        header('locatin: Login2.php');
        //echo "not valid";
      } 
?>
    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Register to analyze</h1>
          
          <form action="Register.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="fname" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="lname" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pwd" />
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome</h1>
          
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="uname"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pwd"/>
          </div>
          
          <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src="jquery-3.1.0.min.js"></script>

  <script src="js/index.js"></script>

    
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
      echo $data['Uname']." ".$data['Password'];

      $row = mysqli_num_rows($result);
    
      //echo mysqli_num_rows($result);
      if( $row > 0 ){
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $uName;

        //echo "Login Success";
        //header('location: Welcome.php');
        header('location: Login2.php');
      }else {
        //echo "Login Fail";
      }
    }
?>
    
  </body>
</html>
