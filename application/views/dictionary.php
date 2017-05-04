<!DOCTYPE html>
<html>
<title>คำศัพท์</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url("<?php echo base_url(); ?>assets/images/ONKVWY0.jpg");
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("<?php echo base_url(); ?>assets/images/background.jpg");
    min-height: 400px;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#mean" class="w3-bar-item w3-button w3-hide-small">MEANING</a>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#mean" class="w3-bar-item w3-button" onclick="toggleFunction()">MEANING</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">คำศัพท์ <span class="w3-hide-small">Docker </span><span class="w3-hide-small">ที่ควรทราบ</span></span>
  </div>
</div>

<!-- Container about-->
<div class="w3-content w3-container w3-padding-64" id="mean">
  <h3>Docker Image</h3>
  <p>Docker Image คือ Environment ที่เราสร้างขึ้นมา ซึ่งประกอบไปด้วย App ที่เราเขียนขึ้นโปรแกรมต่างๆที่เราติดตั้งลงไป (ตัวอย่างคือ Apache, nginx, mysql) ค่า Config ต่างๆทั้งหมดนี้ จะถูกห่อรวมกันเป็นก้อนเดียวเรียกว่า Docker Image</p><br>

  <h3>Docker Registry</h3>
  <p>Docker Registry คือ เป็นระบบที่ใช้เก็บ Docker Image ที่เราสร้างขึ้นมา</p><br>

  <h3>Docker Container</h3>
  <p>Docker Container คือ Container จะถูกสร้าง เมื่อเรานํา Docker Image มารัน ซึ่ง Container จะสามารถสั่ง Start, Stop, Restart ได้ Container แต่ละตัวจะมี RAM, CPU, Users, Fileต่าง ๆ เป็นของตัวเอง</p><br>

  <center><a href="https://goo.gl/3skcpP" target="_blank"><button type="button" class="btn btn-success">QUIZ</button></a></center></br>
  <p>ขอขอบคุณแหล่งข้อมูลจาก <a href="https://goo.gl/cKAYGx" target="_blank">https://goo.gl/cKAYGx</a></p>
  
</div>


<!-- Footer -->
<footer class="w3-center w3-teal w3-padding">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p class="w3-medium">© Copyright 2017, Praneed & Sarasut</p>
</footer>
 
<script>

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
