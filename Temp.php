<?php
  session_start();
  $valid = isset($_SESSION['auth']);
?>
<!DOCTYPE html>
<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_black_active by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:36 GMT -->
<html>
<head>
<style>
html {
  background: #4C9196;
}
body {
  width: 1229px;
  background: #fff;
  border: 4px solid #6C8298;
  margin: 40px auto;
}
.bar {
    width: 91%;
    height: 45px;
    top: 0;
    position: fixed;
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
  min-height: 700px;
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
<link rel="import" id="acticityL" href="Activity.html">
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
  <li id="activityTab" onclick="switchA()"><a href="Activity.html" target="activity" >Activity</a></li>
  <li id="contactTab" onclick="switchC()"><a href="Contact.php">Contact</a></li>
  <!-- <li id="contactTab" onclick="switchC()">Countries</li>
  <li id="contactTab" onclick="switchC()">Browser</li>
  <li id="contactTab" onclick="switchC()">OS</li>
  <li id="contactTab" onclick="switchC()">HTTP status code</li>
  <li id="contactTab" onclick="switchC()">Pages</li>
  <li id="contactTab" onclick="switchC()">URL</li> -->
  <li id="aboutTab" style="float:right;" onclick="switchAbout()">About</li>
  <li id="logoutTab" style="float:right;" onclick="switchL()"><a href="Logout.php">Logout</a></li>
</ul>
<div class="panel" id="homeP">Home</div>
<div class="panel" id="activityP"></div>
<div class="panel" id="contactP">Contact</div>
<div class="panel" id="aboutP"></div>
<div class="panel" id="logoutP">Logout</div>
<!-- <div class="section">
  <section id></section>
</div> -->


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
    get("aboutP").style.display = "none";
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
    get("aboutP").style.display = "none";
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
    get("aboutP").style.display = "none";
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
    get("aboutP").style.display = "block";
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
    get("aboutP").style.display = "none";
    get("logoutP").style.display = "block";
  }

  function loadA(event){
    /*get("activityP").innerHTML='<object type="text/html" data="Activity.html"></object>';*/

  }

  /*function switchAbout(){
    get("aboutP").load("About.html");
  }*/

  var getImport  = document.querySelector('#acticityL');
  var getContent = getImport.import.querySelector('#content');
  document.body.appendChild(document.importNode(getContent, true));
  
</script>

<!-- <iframe src="Activity.html" width="100%" height="100%" name="activity"></iframe> -->
</body>
<?php 
    }else {
        header('location: Login.php');
    } ?>


</html>
