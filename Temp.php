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
  border: 0px solid #6C8298;
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
  /* border-bottom: 1px solid #ccc; */

  /* height: 700px; */
  display: block;
  /* text-align: center; */
}

a.active {
  font-size: 20px;
  border-bottom: 4px solid green;
}

nav ul li a:hover {
  color: green;
}

section.active {}

#1{

}

hr.separateLine {
  border-top: 1px dashed #8c8b8b;
  background-color: #fff;
  border-top: 10px solid #4C9196;/* #F49705 */
}

/*------------------------------*/
#overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #000;
      opacity: 0.8;
      display: none;
    }
    #dialog {
      position: absolute;
      top: 16%;
      left: 35%;
      width: 30%;
      border: 4px solid #ccc;
      background: #fff;
      display: none;
    }
    #dialog h2 {
      margin: 0;
      padding: 8px;
      background: #ddd;
      font-size: 17px;
    }
    #dialog h2 span {
      display: block;
      float: right;
      padding: 0 5px;
      color: #c22;
      cursor: pointer;
    }
    #dialog form {
      padding: 20px;
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
      border-radius: 5px;
      width: 30%;
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
<!-- <link rel="import" id="acticityL" href="http://localhost/PHP/Thesis/Bash/HTML%20Templates%20using%20bash/Activity.html">
<link rel="import" id="hostL" href="http://localhost/PHP/Thesis/Bash/HTML%20Templates%20using%20bash/Host.html">
<link rel="import" id="uagentL" href="http://localhost/PHP/Thesis/Bash/HTML%20Templates%20using%20bash/User%20agent.php">
<link rel="import" id="bUAgentL" href="http://localhost/PHP/Thesis/Bash/HTML%20Templates%20using%20bash/Blank%20user%20agent.php">
<link rel="import" id="httpCodeL" href="http://localhost/PHP/Thesis/Bash/HTML%20Templates%20using%20bash/HTTP%20Status%20Codes.php">
<link rel="import" id="ErrorL" href="http://localhost/PHP/Thesis/Bash/HTML%20Templates%20using%20bash/Error.php">
<link rel="import" id="mostRecentL" href="http://localhost/PHP/Thesis/Bash/HTML%20Templates%20using%20bash/Most%20recent.php"> -->

<link rel="import" id="summarL" href="http://localhost/PHP/Thesis/Learning/logfile/HTML/Summary.php">
<link rel="import" id="acticityL" href="http://localhost/PHP/Thesis/Learning/logfile/HTML/SActivity.php">
<link rel="import" id="hostL" href="http://localhost/PHP/Thesis/Learning/logfile/HTML/Host.php">
<link rel="import" id="uagentL" href="http://localhost/PHP/Thesis/Learning/logfile/HTML/Useragent.php">
<link rel="import" id="bUAgentL" href="http://localhost/PHP/Thesis/Learning/logfile/HTML/Blank%20user%20agent.php">
<link rel="import" id="httpCodeL" href="http://localhost/PHP/Thesis/Learning/logfile/HTML/Status%20Code.php">
<link rel="import" id="ErrorL" href="http://localhost/PHP/Thesis/Learning/logfile/HTML/NotFound%20Errors.php">
<link rel="import" id="mostRecentL" href="http://localhost/PHP/Thesis/Learning/logfile/HTML/Most%20recent.php">

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
  <li id="summarTab" onclick="switchH()"><a id="#1" href="#Summary.html" target="summar">Summary</a></li>
  <li id="activityTab" onclick="switchA()"><a id="#2" href="#Activity.html" target="activity" >Activity</a></li>
  <li id="hostTab" onclick="switchC()"><a id="#3" href="#Host.html" target="host">Hosts</a></li>
  <li id="uagentTab" onclick="switchA()"><a id="#4" href="#User agent.php" target="uagent" >User Agent</a></li>
  <li id="bUAgentTab" onclick="switchA()"><a id="#5" href="#Blank user agent.php" target="bUAgent" >Blank User Agent</a></li>
   <li id="httpCodeTab" onclick="switchA()"><a id="#6" href="#HTTP Code.php" target="httpCode" >Status codes</a></li>
   <li id="ErrorTab" onclick="switchA()"><a id="#7" href="#Error.php" target="Error" >Errors</a></li>
   <li id="mostRecentTab" onclick="switchA()"><a id="#8" href="#Most Recent.php" target="mostRecent" >Most recent visits</a></li>
  <!-- <li id="contactTab" onclick="switchC()">Countries</li>
  <li id="contactTab" onclick="switchC()">Browser</li>
  <li id="contactTab" onclick="switchC()">OS</li>
  <li id="contactTab" onclick="switchC()">HTTP status code</li>
  <li id="contactTab" onclick="switchC()">Pages</li>
  <li id="contactTab" onclick="switchC()">URL</li> -->
  <li id="aboutTab" style="float:right;" onclick="switchAbout()">About</li>
  <li id="logoutTab" style="float:right;" onclick="showDialog()"><a href="#Logout.php">Admin</a></li>
</ul></nav>
<div class="sections" id="sectionID">
  <br>
  <section id="1"></section>
  <section id="2"></section>
  <br><hr class="separateLine">
  <section id="3"></section>
  <br><hr class="separateLine">
  <section id="4"></section>
  <br><hr class="separateLine">
  <section id="5"></section> 
  <br><hr class="separateLine">
  <section id="6"></section> 
  <br><hr class="separateLine">
  <section id="7"></section> 
  <br><hr class="separateLine">
  <section id="8"></section>
</div>
<!-- <div class="section">
  <section id></section>
</div> -->

<!-- Dialog -->
  <div id="overlay" onClick="hideDialog()"></div>
  <div id="dialog">
    <h2>
      Log File Source     <span onClick="hideDialog()">&times;</span>
    </h2>
    <center>
      <form action="Analyze.php" method="post" enctype="multipart/form-data">
        <input type="file" name="logFile" id="photo">
        <br>
        <input type="submit" value="Analyze" />
      </form>
    </center>
  </div>

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

  var getImport  = document.querySelector('#summarL');
  var getContent = getImport.import.querySelector('#summarId');
  document.getElementById("1").appendChild(getContent);

  var getImport  = document.querySelector('#acticityL');
  var getContent = getImport.import.querySelector('#content');
  document.getElementById("2").appendChild(getContent);

  var getImport  = document.querySelector('#hostL');
  var getContent = getImport.import.querySelector('#hostId');
  document.getElementById("3").appendChild(getContent);

  var getImport  = document.querySelector('#uagentL');
  var getContent = getImport.import.querySelector('#uagentId');
  document.getElementById("4").appendChild(getContent);

  var getImport  = document.querySelector('#bUAgentL');
  var getContent = getImport.import.querySelector('#bUAgentId');
  document.getElementById("5").appendChild(getContent);

  var getImport  = document.querySelector('#httpCodeL');
  var getContent = getImport.import.querySelector('#httpCodeId');
  document.getElementById("6").appendChild(getContent);

  var getImport  = document.querySelector('#ErrorL');
  var getContent = getImport.import.querySelector('#ErrorId');
  document.getElementById("7").appendChild(getContent);

  var getImport  = document.querySelector('#mostRecentL');
  var getContent = getImport.import.querySelector('#mostRecentId');
  document.getElementById("8").appendChild(getContent);
  
</script>

<!-- <iframe src="Activity.html" width="100%" height="100%" name="activity"></iframe> -->

<script class="cssdeck" src="jquery-3.1.0.min.js"></script>
    
        <script>
          var sections = $('section'), nav = $('nav'), nav_height = nav.outerHeight() + 70;
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

    <script>
    function showDialog() {
      $('html, body').animate({ scrollTop: $("#sectionID").offset().top - 200 }, 500);
      //scroll lock
      //$('body').css({'overflow':'hidden'});
      $(document).bind('scroll',function () { 
            window.scrollTo(0,0); 
        });

      document.getElementById("overlay").style.display = "block";
      document.getElementById("dialog").style.display = "block";
    }

    function hideDialog() {
      //scroll unlock
      $(document).unbind('scroll'); 
      //$('body').css({'overflow':'visible'});


      document.getElementById("overlay").style.display = "none";
      document.getElementById("dialog").style.display = "none";
    }
  </script>

</body>
<?php 
    }else {
        header('location: Login.php');
    } ?>

</html>
