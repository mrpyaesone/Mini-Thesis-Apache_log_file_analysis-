<?php
  session_start();
  $valid = isset($_SESSION['auth']);
?>
<!DOCTYPE html>
<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_black_active by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:36 GMT -->
<html>
<head>
<style>
.bar {
    list-style-type: none;
    margin: 0;
    /* padding: 10px 10px 0 10px; */
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

.bar li {
    padding: 12px 21px;
    float: left;
    margin-right: 8px;
    cursor: pointer;
    color: white; 
    
}

.bar li a {
    display: block;
    color: white;
    text-align: center;
   /*  padding: 14px 16px; */
    text-decoration: none;
}

.panel{
  min-height: 500px;
  padding: 15px;
}

#homeTab{
  color: #008080;
}
#activityTab{
  color: white;
}
#contactTab{
  color: white;
}
#aboutTab{
  color: white;
}
#logoutTab{
  color: white;
}

#homeP{
  display: block;
}
#activityP{
  display: none;
}
#contactP{
  display: none;
}
#aboutP{
  display: none;
}
#logoutP{
  display: none;
}

</style>
</head>
<?php if($valid){ ?>
<body>

<!-- <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="Activity.html">Activity</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right;"><a href="About.html">About</a></li>
  <li style="float:right;"><a href="Logout.html">Logout</a></li>
</ul> -->

<ul class="bar">
  <li id="homeTab" onclick="switchH()">Home</li>
  <li id="activityTab" onclick="switchA()"><a href="Activity.html" onclick="loadA()">Activity</a></li>
  <li id="contactTab" onclick="switchC()">Contact</li>
  <li id="aboutTab" style="float:right;" onclick="switchAbout()">About</li>
  <li id="logoutTab" style="float:right;" onclick="switchL()"><a href="Logout.php">Logout</a></li>
</ul>
<div class="panel" id="homeP">Home</div>
<div class="panel" id="activityP"></div>
<div class="panel" id="contactP">Contact</div>
<div class="panel" id="aboutP">About</div>
<div class="panel" id="logoutP">Logout</div>


<script>
  function get(obj) {
    return document.getElementById(obj);
  }

  function switchH(){
    get("homeTab").style.color = "#008080";
    get("activityTab").style.color = "white";
    get("contactTab").style.color = "white";
    get("aboutTab").style.color = "white";
    get("logoutTab").style.color = "white";
    get("homeP").style.display = "block";
    get("activityP").style.display = "none";
    get("contactP").style.display = "none";
    get("aboutPo").style.display = "none";
    get("logoutP").style.display = "none";
  }

  function switchA(){
    get("homeTab").style.color = "white";
    get("activityTab").style.color = "#008080";
    get("contactTab").style.color = "white";
    get("aboutTab").style.color = "white";
    get("logoutTab").style.color = "white";
    get("homeP").style.display = "none";
    get("activityP").style.display = "block";
    get("contactP").style.display = "none";
    get("aboutPo").style.display = "none";
    get("logoutP").style.display = "none";
    }

  function switchC(){
    get("homeTab").style.color = "white";
    get("activityTab").style.color = "white";
    get("contactTab").style.color = "#008080";
    get("aboutTab").style.color = "white";
    get("logoutTab").style.color = "white";
    get("homeP").style.display = "none";
    get("activityP").style.display = "none";
    get("contactP").style.display = "block";
    get("aboutPo").style.display = "none";
    get("logoutP").style.display = "none";
  }

  function switchAbout(){
    get("homeTab").style.color = "white";
    get("activityTab").style.color = "white";
    get("contactTab").style.color = "white";
    get("aboutTab").style.color = "#008080";
    get("logoutTab").style.color = "white";
    get("homeP").style.display = "none";
    get("activityP").style.display = "none";
    get("contactP").style.display = "none";
    get("aboutPo").style.display = "block";
    get("logoutP").style.display = "none";
  }

  function switchL(){
    get("homeTab").style.color = "white";
    get("activityTab").style.color = "white";
    get("contactTab").style.color = "white";
    get("aboutTab").style.color = "white";
    get("logoutTab").style.color = "#008080";
    get("homeP").style.display = "none";
    get("activityP").style.display = "none";
    get("contactP").style.display = "none";
    get("aboutPo").style.display = "none";
    get("logoutP").style.display = "block";
  }

  function loadA(event){
    get("activityP").innerHTML='<object type="text/html" data="Activity.html"></object>';

  }
</script>
</body>
<?php 
    }else {
        header('location: Log.php');
    } ?>


</html>
