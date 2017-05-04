<!DOCTYPE html>
<html>
<title>การติดตั้ง</title>
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
    <a href="#windows" class="w3-bar-item w3-button w3-hide-small">INSTALL ON WINDOWS</a>
    <a href="#linux" class="w3-bar-item w3-button w3-hide-small">INSTALL ON LINUX</a>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#windows" class="w3-bar-item w3-button" onclick="toggleFunction()">BENEFITS</a>
    <a href="#linux" class="w3-bar-item w3-button" onclick="toggleFunction()">DOCKER CLIENT-SERVER</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">การติดตั้ง <span class="w3-hide-small">Docker</span></span>
  </div>
</div>

<!-- Container about-->
<div class="w3-content w3-container w3-padding-64" id="windows">
  <h3 class="w3-center">การติดตั้งบนระบบปฏิบัติการ Windows</h3>
  <p>1. Download Docker Tool BOX Docker Tool BOX คือ ชุดโปรแกรมสำหรับใช้งาน Docker Desktop ของเราใน Docker Tool BOX จะประกอบไปด้วย</p>
     <dd>- Docker client เป็นตัว Docker สำหรับสร้าง images และ containers<br>
     <dd>- Docker Machine เป็นตัว Linux ที่รันทำงานเบื้องหลังเพื่อให้ Docker ทำงานได้<br>
     <dd>- Docker Compose เครื่องมือต่างในการใช้งาน Docker<br>- Kitematic ใช้งาน Docker แบบ GUI<br>
     <dd>- Docker QuickStart เป็น tool สำหรับใช้งาน Docker ผ่าน CLI คล้าย Putty แต่ตัวนี้ Direct ไปที่ Docker ของเราเลย<br>
     <dd>- Oracle VM VirtualBox เนื่องจาก Docker เป็น Base Linux เพื่อให้เราสามารถใช้งานบน Windows ได้ Docker Tool BOX จะทำการ Download VirtualBox มาให้เพื่อให้สามารถใช้งาน Linux Server พื้นหลัง Windows ได้<br></p> 
     
     <a href="https://www.docker.com/products/docker-toolbox" target="_blank"><button type="button" class="btn btn-success">Download Docker for Windows</button></a></br>

  <center><img src="<?php echo base_url(); ?>assets/images/d12.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="ตัวอย่างของหน้าเว็ป" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

  <p>2. ตรวจสอบว่าเครื่องของเรารองรับ Virtualization Technology หรือไม่เพราะ ถ้าไม่รองรับจะใช้ งานไม่ได้ ให้เราทำการ คลิกขวาที่ Task Bar แล้วเลือก Task Manager แล้วคลิกที่ Performance แล้วสังเกตุตามภาพ ว่า Enable หรือไม่</p>
  <center><img src="<?php echo base_url(); ?>assets/images/d13.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="จากภาพขึ้น Enabled แล้ว" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

  <p>3. ดับเบิ้ลคลิก DockerToolbox-1.10.3.exe</p>
   <center><img src="<?php echo base_url(); ?>assets/images/d14.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="กำลังโหลดข้อมูลเพื่อติดตั้ง" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center>


   <p><br>4. เราก็จะเข้าสู่หน้าเริ่มต้นติดตั้ง Docker ซึ่งก็จะมีรายละเอียดและข้อตกลงให้เรากด Next ไปเรื่อย ๆ</p>
   <center><img src="<?php echo base_url(); ?>assets/images/d15.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="เริ่มต้นติดตั้ง Docker" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

   <center><br><img src="<?php echo base_url(); ?>assets/images/d16.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="ติดตั้ง Docker เสร็จสิ้น" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center>

   <p><br>5. เมื่อลงเสร็จเรียบร้อยแล้วเราจะได้ โปรแกรมมา 3 ตัวดังรูป<br>
   - Docker Quickstart Terminal เป็น Console สำหรับเราเข้าไปใช้คำสั่งของตัว Docker คล้ายๆ Putty ที่เรา Terminal เข้าหา Linux Server<br>
   – Kitematic (Alpha) เป็น Tool ให้เราใช้งาน Docker แบบ GUI</p>
   <center><img src="<?php echo base_url(); ?>assets/images/d17.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="ประกอบไปด้วยโปรแกรม 3 ตัว" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

   <p>6. เริ่มใช้งาน Docker แบบ CLI<br>
   - ให้เราทำการกดที่ Docker Quickstart Terminal<br>
   - จะมีหน้าต่าง Terminal ขึ้นมา พร้อมระบุ IP ของ Docker ของเรา</p>
   <center><img src="<?php echo base_url(); ?>assets/images/d18.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="หน้าต่าง Terminal ของ Docker" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

    <p>7. คำสั่งตรวจสอบ Version Docker<br>
    - ให้พิมพ์คำว่า docker version ระบบก็จะ Show ข้อความดังรูป Client คือ Windows ของเราที่เข้าไป Remote Docker อีกที Server คือ ตัว VM ที่รัน Docker อยู่ ซึ่งมันก็คือ Linux ที่วิ่งผ่าน VBOX ทำงานพื้นหลัง Windows เรานั่นเอง<br>
    - ให้เราทำการกดที่ Docker Quickstart Terminal<br>
    - จะมีหน้าต่าง Terminal ขึ้นมา พร้อมระบุ IP ของ Docker ของเรา</p>
    <center><img src="<?php echo base_url(); ?>assets/images/d19.PNG"class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="ตัวอย่างการตรวจสอบเวอร์ชั่น" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

     <p>8. คำสั่งตรวจสอบ docker images<br>
        - docker images คืออะไร คือ ตัว Block ย่อยภายใต้ Docker ซึ่งเราสามารถเพิ่มลบแก้ไขได้ถ้าให้เข้าใจง่าย Docker คือ ตัว OS หลัง Images ก็คือ Guest OS อะไรประมาณนี้ แต่ในคน เซ็บ Container มันไม่ใช้  Guest OS รายละเอียดเพิ่มเติมอ่านได้ที่ ลิงค์ที่อยุ่ด้านบน<br>
        - ให้พิมพ์คำว่า docker images<br>
        - ระบบจะโชว์ข้อความดังรูป ในที่นี้ของผมมีแค่ images เดียวคือ ubuntu-upstart</p>
    <center><img src="<?php echo base_url(); ?>assets/images/d20.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การตรวจสอบ Docker Images" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

    <p>9. คำสั่งค้นหา docker images<br>
    - เราสามารถค้นหา images ที่มีอยู่แล้วได้จาก Docker HUB ซึ่งมีมากและมีคนสร้างขึ้นมาใหม่เรื่อยๆ เราแค่ นึกว่าอยากได้อะไรมาลง ในที่นี้ผมจะลองหา ubuntu ดูว่ามี images  ไหม<br>
    - พิมพ์คำว่า docker search ubuntu ถ้าเราจะค้นหาอันอื่นๆ docker search <ชื่อ images >ระบบก็จะโชว์ images  ที่เกียวข้องกับ ubuntu ขึ้นมาเราก็จดชื่อ images  ไว้เพื่อที่เราจะได้ดึงมาเข้า Docker ของเราในขึ้นตอนต่อไป</p>
    <center><img src="<?php echo base_url(); ?>assets/images/d21.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การค้นหา Docker Images" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

    <p>10. การดึง images มาลง Docker ของเรา<br>- พิมพ์คำว่า docker pull <ชื่อ images > จากนั่นก็รอจน ดึงเสร็จสมบูรณ์</p>
    <center><img src="<?php echo base_url(); ?>assets/images/d22.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="พิมพ์คำว่า Docker Pull <ชื่อ Images >" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>
    <center><img src="<?php echo base_url(); ?>assets/images/d23.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การดาวน์โหลด Image เสร็จสมบูรณ์" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

    <p>- ตรวจสอบ images อีกรอบเพื่อดูว่าเข้ามาใน list หรือยัง</p>
    <center><img src="<?php echo base_url(); ?>assets/images/d24.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การตรวจสอบ Docker Images" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

    <p>11. การรัน images เพื่อใช้งาน</p>
    <center><img src="<?php echo base_url(); ?>assets/images/d25.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การรัน Images" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

    <p>- พิมพ์คำว่า docker run -i -t Ubuntu ระบบก็เข้า ย้ายเข้ามา ubuntu ของเราเราก็ใช้งาน ubuntu ของเราได้เลย
    <br>- ถ้าต้องการออกจาก ubuntu CLI มาสู่ docker อีกครั้งให้พิมพ์ exit</p>
    <center><img src="<?php echo base_url(); ?>assets/images/d26.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การออกจาก Ubuntu CLI มาสู่ docker โดยพิมพ์ exit" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

    <p>12. การลบ images<br>- พิมพ์คำว่า docker rmi  ubuntu ถ้าต้องการลบตัวอื่นๆ docker pull <ชื่อ images ></p>
    <center><img src="<?php echo base_url(); ?>assets/images/d27.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การลบ Images ด้วยคำสั่ง docker rmi ubuntu" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

    <p>13. การใช้งาน Docker CLI ผ่าน Putty<br>- ใส่ IP ของ Docker เรา แล้ว connect</p>
    <center><img src="<?php echo base_url(); ?>assets/images/d28.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="ใส่ IP ของ Docker" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

    <center><img src="<?php echo base_url(); ?>assets/images/d29.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การเชื่อมต่อสำเร็จ แล้วระบบจะถามผู้ใช้งาน" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

  <p>- ระบบจะถาม user และ password ซึ่ง password ที่ docker provide ให้เราเป็นค่าเริ่มตัน คือ<br>
  - User : docker <br>- Pass: tcuser<br>
  - Login เสร็จแล้วจะขึ้นข้อความดังรูป แสดงว่าเรา terminal docker เป็นที่เรียบร้อยแล้ว</p>
  <center><img src="<?php echo base_url(); ?>assets/images/d30.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การเข้าสู่ระบบสำเร็จ" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center>

</div>


<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <center><span class="w3-xxlarge w3-text-back w3-wide">การติดตั้งบนระบบปฏิบัติการ Linux</span></center>
  </div>
</div>

<!-- Container docker client-server-->
<div class="w3-content w3-container w3-padding-64" id="linux">

  <p>การติดตั้ง Docker บน Linux จะผ่านคำสั่ง CLI ของแต่ละ distro และสำหรับ Ubuntuสามารถติดตั้งผ่านทาง apt-get ได้โดยเพิ่ม repository source ก่อน<br>$ sudo apt-key adv --keyserver hkp://p80.pool.sks-keyservers.net:80 --recv-keys 58118E89F3A912897C070ADBF76221572C52609D<br>
  $ sudo /bin/sh -c 'echo "deb https://apt.dockerproject.org/repo ubuntu-trusty main" >> /etc/apt/source.list'<br>
  $ sudo apt-get update && sudo apt-get install docker-engine</p>
  

  <center><a href="https://goo.gl/Cctacd" target="_blank"><button type="button" class="btn btn-success">QUIZ</button></a></center></br>

  <p>ขอขอบคุณแหล่งข้อมูลจาก <a href="https://www.docker.com" target="_blank">https://www.docker.com</a></p>
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
