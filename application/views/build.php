<!DOCTYPE html>
<html>
<title>การ Build Container</title>
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

/* Second image (Portfolio) *.bgimg-2 {
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
    <a href="#build" class="w3-bar-item w3-button w3-hide-small">BUILD CONTAINER</a>
    <a href="http://learndockerv1.azurewebsites.net/index.php/Docker/docker" class="w3-bar-item w3-button w3-hide-small">USE DOCKER</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#build" class="w3-bar-item w3-button" onclick="toggleFunction()">BUILD CONTAINER</a>
    <a href="http://learndockerv1.azurewebsites.net/index.php/Docker/docker"  class="w3-bar-item w3-button" onclick="toggleFunction()">USE DOCKER</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">การใช้งาน </span>Build <span class="w3-hide-small">Container</span></span>
  </div>
</div>

<!-- Container about-->
<div class="w3-content w3-container w3-padding-64" id="build">
  <p>ตัวอย่างการทดลอง build container สำหรับ run Go กัน โดยที่ผมจะใช้ net/http เพื่อทำ server สำหรับ response "Hello, world!<br>1. Pull image <br>จัดการ pull image สำหรับ Go ด้วยคำสั่ง   </p>

  <center><img src="<?php echo base_url(); ?>assets/images/d31.PNG" alt="คำสั่งจัดการ pull image" onclick="onClick(this)" class="w3-round w3-image w3-opacity w3-hover-opacity-off"></center><br>

  <p>คำสั่งนี้จะดาวน์โหลด Image Linux ที่ติดตั้ง Go compiler เวอร์ชันล่าสุด สามารถดูเวอร์ชันอื่น ๆ ได้ที่ Docker Hub เรียกดูรายการ Image ทั้งหมดที่มีอยู่ในเครื่อง</p>
  <center><img src="<?php echo base_url(); ?>assets/images/d32.PNG" alt="คำสั่งดาวน์โหลด Image" onclick="onClick(this)" class="w3-round w3-image w3-opacity w3-hover-opacity-off"></center><br>

  <p>2. สร้าง Go Project <br>สมมติตั้งชื่อ folder ว่า golang-docker ข้างในจะมีไฟล์อยู่ 2 ไฟล์ดังนี้ <br>- main.go</p>
  <center><img src="<?php echo base_url(); ?>assets/images/d33.PNG" alt="ไฟล์ main.go" onclick="onClick(this)" class="w3-round w3-image w3-opacity w3-hover-opacity-off"></center><br>

  <p>- Dockerfile</p>
  <center><img src="<?php echo base_url(); ?>assets/images/d34.PNG" alt="ไฟล์ dockerfile" onclick="onClick(this)" class="w3-round w3-image w3-opacity w3-hover-opacity-off" ></center><br>

  <p>คำสั่ง FROM golang:latest คือให้ใช้งาน image golang ที่มี tag เวอร์ชันว่า Latest และคำสั่ง RUN สำหรับใช้ run Linux command ที่ตามหลังนั่นเองครับ</p>
  <p>3. Deploy Container<br>เราต้องทำการ Deploy Container จาก Project เพื่อให้เป็น Container ของเราเอง โดยใช้คำสั่ง</p>
  <center><img src="<?php echo base_url(); ?>assets/images/d35.PNG" alt="คำสั่ง Deploy Container" onclick="onClick(this)" class="w3-round w3-image w3-opacity w3-hover-opacity-off" ></center><br>

  <p>ด้วยคำสั่งนี้จะทำให้ Docker เข้าไปอ่านไฟล์ Dockerfile และทำงานตามคำสั่งที่อยู่ข้างใน จากนั้นจะทำการสร้าง Container ขึ้นมาชื่อว่า golang-docker ตามในคำสั่งด้านบน ถ้าเราเรียกดู image ก็จะเห็นว่ามีรายการ image ที่เราสร้างไว้เมื่อสักครู่มาแล้ว</p>
  <center><img src="<?php echo base_url(); ?>assets/images/d36.PNG" alt="คำสั่งเข้าไปอ่านไฟล์" onclick="onClick(this)" class="w3-round w3-image w3-opacity w3-hover-opacity-off" ></center><br>

  <center><img src="<?php echo base_url(); ?>assets/images/d37.PNG" alt="ตัวอย่างผลลัพ" onclick="onClick(this)" class="w3-round w3-image w3-opacity w3-hover-opacity-off" ></center><br>

  <p>4. Run<br>สุดท้ายเราจะสั่ง run container ที่เราสร้างขึ้นเมื่อสักครู่ด้วยคำสั่ง</p>
  <center><img src="<?php echo base_url(); ?>assets/images/d38.PNG" alt="run container" onclick="onClick(this)" class="w3-round w3-image w3-opacity w3-hover-opacity-off" ></center><br>
  <p>คำสั่งนี้จะสั่งรัน golang-docker และ map port 8080 ของ host เข้ากับ 8080 ของ container</p><br>

    <p>ขอขอบคุณแหล่งข้อมูลจาก <a href="https://goo.gl/ewicOZ" target="_blank">https://goo.gl/ewicOZ</a></p>
</div>


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
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
