<?php
  session_start();
  $valid = true;
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

/* #homeTab{
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
} */

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

section {
  width: 25%;
  padding: 0px;
  background: #fff;
  border-bottom: 1px solid #ccc;
  height: 700px;
  text-align: center;
}

a.active {
  font-size: 20px;
  border-bottom: 4px solid green;
}

nav ul li a:hover {
  color: green;
}

section.active {}

</style>
<link rel="import" id="acticityL" href="http://localhost/PHP/Thesis/Bash/HTML%20Templates%20using%20bash/Activity.html">
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
<nav>
<ul class="bar">
  <li id="homeTab" onclick="switchH()"><a id="#1" href="#Home.html" >Home</a></li>
  <li id="activityTab" onclick="switchA()"><a id="#2" href="#Activity.html" target="activity" >Activity</a></li>
  <li id="contactTab" onclick="switchC()"><a id="#3" href="#Contact.php" >Contact</a></li>
  <!-- <li id="contactTab" onclick="switchC()">Countries</li>
  <li id="contactTab" onclick="switchC()">Browser</li>
  <li id="contactTab" onclick="switchC()">OS</li>
  <li id="contactTab" onclick="switchC()">HTTP status code</li>
  <li id="contactTab" onclick="switchC()">Pages</li>
  <li id="contactTab" onclick="switchC()">URL</li> -->
  <li id="aboutTab" style="float:right;" onclick="switchAbout()">About</li>
  <li id="logoutTab" style="float:right;" onclick="switchL()"><a href="Logout.php">Logout</a></li>
</ul></nav>
<div class="sections">
  <section id="1"><h1>First</h1></section>
  <section id="2"></section>
  <section id="3"><h1>Third</h1></section>
  <section id="4"><h1>Fourth</h1></section>
  <section id="5"><h1>Fifth</h1></section> 
</div>
<!-- <div class="section">
  <section id></section>
</div> -->


<script>
  function get(obj) {
    return document.getElementById(obj);
  }

  /*function switchH(){
    get("#1").style.color = "#008080";
    get("#2").style.color = "white";
    get("#3").style.color = "white";
    get("aboutTab").style.color = "white";
    get("logoutTab").style.color = "white";
    get("homeP").style.display = "block";
    get("activityP").style.display = "none";
    get("contactP").style.display = "none";
    get("aboutP").style.display = "none";
    get("logoutP").style.display = "none";
  }

  function switchA(){
    get("#1").style.color = "white";
    get("#2").style.color = "#008080";
    get("#3").style.color = "white";
    get("aboutTab").style.color = "white";
    get("logoutTab").style.color = "white";
    get("homeP").style.display = "none";
    get("activityP").style.display = "block";
    get("contactP").style.display = "none";
    get("aboutP").style.display = "none";
    get("logoutP").style.display = "none";
    }

  function switchC(){
    get("#1").style.color = "white";
    get("#2").style.color = "white";
    get("#3").style.color = "#008080";
    get("aboutTab").style.color = "white";
    get("logoutTab").style.color = "white";
    get("homeP").style.display = "none";
    get("activityP").style.display = "none";
    get("contactP").style.display = "block";
    get("aboutP").style.display = "none";
    get("logoutP").style.display = "none";
  }*/

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
  document.getElementById("2").appendChild(getContent);
  
</script>

<!-- <iframe src="Activity.html" width="100%" height="100%" name="activity"></iframe> -->

<script class="cssdeck" src="jquery-3.1.0.min.js"></script>
    
        <script>
          var sections = $('section'), nav = $('nav'), nav_height = nav.outerHeight() + 80;
          $(window).on('scroll', function () {
          var cur_pos = $(this).scrollTop();
          sections.each(function () {
            var top = $(this).offset().top - nav_height, bottom = top + $(this).outerHeight();
           if (cur_pos >= top && cur_pos <= bottom) {
            nav.find('a').removeClass('active');
            sections.removeClass('active');
            $(this).addClass('active');
            nav.find('a[id="#' + $(this).attr('id') + '"]').addClass('active');
        }
    });
});
nav.find('a').on('click', function () {
    var $el = $(this), id = $el.attr('id');
    $('html, body').animate({ scrollTop: $(id).offset().top - nav_height }, 500);
    return false;
});
      //# sourceURL=pen.js
    </script>
</body>
<?php 
    }else {
        header('location: Login.php');
    } ?>


</html>
