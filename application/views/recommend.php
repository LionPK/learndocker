<!DOCTYPE html>
<html>
<title>แนะนำการใช้งาน</title>
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
    <a href="#benifits" class="w3-bar-item w3-button w3-hide-small">BENEFITS</a>
    <a href="#docker_cl" class="w3-bar-item w3-button w3-hide-small">DOCKER CLIENT-SERVER</a>
    <a href="#docker_c" class="w3-bar-item w3-button w3-hide-small">DOCKER CLIENT</a>
    <a href="#docker_d" class="w3-bar-item w3-button w3-hide-small">DOCKER DAEMON</a>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#benifits" class="w3-bar-item w3-button" onclick="toggleFunction()">BENEFITS</a>
    <a href="#docker_cl" class="w3-bar-item w3-button" onclick="toggleFunction()">DOCKER CLIENT-SERVER</a>
    <a href="#docker_c" class="w3-bar-item w3-button" onclick="toggleFunction()">DOCKER CLIENT</a>
    <a href="#docker_d" class="w3-bar-item w3-button" onclick="toggleFunction()">DOCKER DAEMON</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">แนะนำ</span>การใช้งาน <span class="w3-hide-small">Docker</apan></span>
  </div>
</div>

<!-- Container about-->
<div class="w3-content w3-container w3-padding-64" id="benifits">
  <h3 class="w3-center">ข้อดีของการใช้ Docker</h3>
  <p>1. Docker ไม่ต้องเสียเวลาในสร้าง OS ใหม่ และการ config แต่ละ OS เลย<br>
     2. Docker เบาและเร็วกว่ามาก ไม่ว่าจะเป็น start stop และ restart เพราะมันใช้ OS, CPU และ RAM ร่วมกันกับ Host OS<br>
     3. Docker สามารถรัน container ได้มากกว่า VMs ในเครื่องที่มีทรัพยากรที่เท่ากัน<br>
     4. Docker มีระบบ Registry ทำให้สามารถเคลื่อนย้าย หรือติดตั้ง Container ได้สะดวก และรวดเร็วกว่ามาก<br>
     5. Docker สามารถจัดการ service ที่มีหลาย version ได้อย่างง่ายดาย เช่น PHP 5.4, PHP 5.6 สามารถสั่ง Start, Stop ได้ตามต้องการ<br>
     6. Containers มันรันอยู่บน Docker Engine ทำให้ไม่ต้องสนใจว่า Infrastructure หรือ Host OS ว่าจะเป็นอะไรยังไง ทำให้หมดปัญหาว่าเครื่อง Dev รันได้ แต่เครื่อง Production มันรันไม่ได้บ้าง หรือเครื่อง Dev แต่ละคนติดตั้งเครื่องมือคนละเวอร์ชันกัน เราก็ build container เป็น Image แล้วส่งในคนในทีมใช้ ก็หมดปัญหาแล้ว
  </p>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <center><span class="w3-xxlarge w3-text-gray w3-wide">Docker Client-Server Architecture</span></center>
  </div>
</div>

<!-- Container docker client-server-->
<div class="w3-content w3-container w3-padding-64" id="docker_cl">
  <p>Docker นั่นใช้ client-server architecture โดย Docker client จะติดต่อกับ Docker Server เพื่อสั่งให้ build, run และ distribute Docker containers ของเรา ผ่าน REST API  บน UNIX sockets หรือ network interface</p>

  <center><img src="<?php echo base_url(); ?>assets/images/cal.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="กระบวนการทำงาน" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center>
</div>


<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <center><span class="w3-xxlarge w3-text-gray w3-wide">Docker Client</span></center>
  </div>
</div>

<!-- Container docker client-->
<div class="w3-content w3-container w3-padding-64" id="docker_c">
  <p>Docker Client นั้นเป็น user interface ไว้รับ commands และ configuration flags จากผู้ใช้งาน และส่งไปยัง Docker Daemon ซึ่งมี client อยู่ 2 แบบ คือ CLI และ Kitematic</p>

  <center><img src="<?php echo base_url(); ?>assets/images/d9.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="แบบที่ 1 CLI" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

  <center><img src="<?php echo base_url(); ?>assets/images/d10.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="แบบที่ 2 Kitematic" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <center><span class="w3-xxlarge w3-text-gray w3-wide">Docker Daemon</span></center>
  </div>
</div>

<!-- Container Docker Daemon-->
<div class="w3-content w3-container w3-padding-64" id="docker_d">
  <p>Docker Daemon (หรือเรียกว่า Docker Engine/Docker Server ก็ได้) เป็น persistence processที่เอาไว้ building, running และ distributing Docker containers โดยจะได้รับคำสั่งจาก Docker client ซึ่ง Docker Client และ Docker Daemon สามารถรันอยู่ Docker Host เดียวกันได้ หรือจะใช้ Docker Client ติดต่อผ่าน remote Docker Daemon ก็ได้ แต่ที่สำคัญเลยคือ Docker Daemon ต้องรันอยู่บน Linux เท่านั้น ดังนั้นบน Windows และ Mac OS X Docker Daemon จะรันอยู่ Docker Machine ซึ่ง Linux VM ตัวเล็ก ๆ ที่ทำขึ้นมาเพื่อรัน Docker Daemon โดยเฉพาะ</p>

  <center><img src="<?php echo base_url(); ?>assets/images/d11.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="แบบที่ 1 CLI" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

  <center><a href="https://goo.gl/HdK25n" target="_blank"><button type="button" class="btn btn-success">QUIZ</button></a></center></br>

  <p>ขอขอบคุณแหล่งข้อมูลจาก <a href="https://goo.gl/jBEZPZ" target="_blank">https://goo.gl/jBEZPZ</a></p>

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
