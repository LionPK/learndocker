<!DOCTYPE html>
<html>
<title>ความหมาย</title>
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
    <a href="#docker" class="w3-bar-item w3-button w3-hide-small">DOCKER</a>
    <a href="#image" class="w3-bar-item w3-button w3-hide-small">DOCKER IMAGE</a>
    <a href="#container" class="w3-bar-item w3-button w3-hide-small">DOCKER CONTAINER</a>
    <a href="index.php/Recommend/recommend" class="w3-bar-item w3-button w3-hide-small">RECOMMEND</a>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#docker" class="w3-bar-item w3-button" onclick="toggleFunction()">DOCKER</a>
    <a href="#image" class="w3-bar-item w3-button" onclick="toggleFunction()">DOCKER IMAGE</a>
    <a href="#container" class="w3-bar-item w3-button" onclick="toggleFunction()">DOCKER CONTAINER</a>
    <a href="index.php/Recommend/recommend" class="w3-bar-item w3-button" onclick="toggleFunction()">RECOMMEND</a>

  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">ความหมาย</span>
  </div>
</div>

<!-- Container about-->
<div class="w3-content w3-container w3-padding-64" id="docker">
  <h3 class="w3-center">Docker</h3>
  <p>Docker คือ Virtualization อย่างนึงที่รันอยู่บน LXC ที่อยู่บน Linux โดยมันจะสร้าง Containers เพื่อจำลองสภาพแวดล้อมการทำงานอยู่บนระดับ OS ซึ่งจะต่างกับ VMs ที่ต้องจำลอง Guest OS โดยใช้ Hypervisor (VMware, Virtual Box) ขึ้นมาก่อน ดังภาพ
  </p>

  <center><img src="<?php echo base_url(); ?>assets/images/d1.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การจำลอง Guest OS โดยใช้ Hyperviso" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

  <p>จะเห็นว่า VM  จําลองขึ้นมาทั้งระบบปฏิบัติการทําให้มีกระบวนการที่รันขึ้นมาโดยไม่จําเป็น ในขณะที่ Docker จะแยก Guest OS ออกมา โดยจะเรียกว่า Container ซึ่งในแต่ละ Container คือการจําลอง Environment สำหรับ 1 Service เท่านั้น (ดูภาพประกอบ)  ทําให้มีขนาดเล็ก สามารถรันขึ้นมาได้เร็ว และไม่เปลืองทรัพยากรณ์ของเครื่องเมื่อเที่ยบกับ VM</p>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <center><span class="w3-xxlarge w3-text-gray w3-wide">Docker Image</span></center>
  </div>
</div>

<!-- Container docker client-server-->
<div class="w3-content w3-container w3-padding-64" id="image">
  <p>Docker Image เป็นเหมือนตัวต้นแบบของ Container ซึ่งภายในจะประกอบด้วย Application ต่าง ๆ ที่มีการติดตั้งไว้เพื่อใช้งานสำหรับ Service นั้น ๆ รวมทั้งมีการ Config ค่าต่าง ๆ ไว้เรียบร้อยแล้ว จากนั้นก็นำมาสร้างเป็น Docker Image บน Registry เพื่อนำมาใช้งาน ทั้งนี้ผู้ใช้งานสามารถสร้าง Docker Image สำหรับใช้งานเองได้อีกด้วย</p>
</div>


<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <center><span class="w3-xxlarge w3-text-gray w3-wide">Docker container</span></center>
  </div>
</div>

<!-- Container docker client-->
<div class="w3-content w3-container w3-padding-64" id="container">
  <p>Docker container สามารถมองได้เสมือนกล่อง ซึ่งนำ Docker Image มาติดตั้ง เพื่อให้สามารถใช้งานบริการที่ต้องการจาก Image นั้น ๆ ได้โดยใน Container แต่ละตัวจะมีการใช้งาน RAM, CPU, ไฟล์ตั้งค่าต่าง ๆ เป็นของแต่ละ Container เอง และยังสามารถสั่ง Start, Stop ได้ที่ Container นั้น ๆ อีกด้วย</p>

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
