<!DOCTYPE html>
<html>
<title>Docker Tutorial</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#Tutorial" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TUTORIAL</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">DOCKER</a>
    <a href="#hub" class="w3-bar-item w3-button w3-padding-large w3-hide-small">DOCKER HUB</a>
    <a href="#team" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TEAM</a>
    
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">QUIZ <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="https://goo.gl/HdK25n" target="_blank" class="w3-bar-item w3-button">Docker Recommended</a>
        <a href="https://goo.gl/3skcpP" target="_blank" class="w3-bar-item w3-button">Difinition of Docker</a>
        <a href="https://goo.gl/Cctacd" target="_blank" class="w3-bar-item w3-button">Install Docker</a>
        <a href="https://goo.gl/0zblGp" target="_blank" class="w3-bar-item w3-button">Use Docker</a>
      </div>
    </div>

    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="https://www.docker.com/docker-windows" class="w3-bar-item w3-button">Download for Windows</a>
        <a href="https://www.docker.com/docker-mac" class="w3-bar-item w3-button">Download for Mac</a>
        <a href="https://www.docker.com/docker-ubuntu" class="w3-bar-item w3-button">Download for Ubuntu</a>
        <a href="https://stackoverflow.com/" class="w3-bar-item w3-button">Stackoverflow</a>
      </div>
    </div>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-blue w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#Tutorial" class="w3-bar-item w3-button w3-padding-large">TUTORIAL</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large">DOCKER</a>
  <a href="#hub" class="w3-bar-item w3-button w3-padding-large">DOCKER HUB</a>
  <a href="#team" class="w3-bar-item w3-button w3-padding-large">TEAM</a>
  <a href="https://goo.gl/HdK25n" class="w3-bar-item w3-button w3-padding-large">ONE QUIZ</a>
  <a href="https://docker.com" class="w3-bar-item w3-button w3-padding-large">DOCKER OFFICE WEB</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php echo base_url(); ?>assets/images/docker.png" alt="docker" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Docker</h3>
      <p><b>ทำความรู้จัก Docker</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php echo base_url(); ?>assets/images/docker01.png" alt="docker01" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>ทำไมต้อง Docker</h3>
      <p><b>Docker มีประโยชน์อย่างไรมาดูกัน</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php echo base_url(); ?>assets/images/docker02.png" alt="docker02" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Install Docker</h3>
      <p><b>เรียนรู้การติดตั้ง Docker</b></p>    
    </div>
  </div>

  <!-- Features Section of tutorial-->
  <div class="w3-container" style="padding:128px 16px" id="Tutorial">
  <h3 class="w3-center">TUTORIAL</h3>
  <p class="w3-center w3-large">บทเรียนเหล่านี้ทางเราได้คัดสันมาเพื่อคุณ</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <a href="index.php/Recommend/recommend" target="_blank"><img src="<?php echo base_url(); ?>assets/images/idea.png" alt="idea" class="w3-hover-opacity"></a>
      <br><br><p class="w3-large">ทำความรู้จักกับ Docker</p>
    </div>
    <div class="w3-quarter">
      <a href="index.php/Diction/diction" target="_blank"><img src="<?php echo base_url(); ?>assets/images/diction.png" alt="dictionary" class="w3-hover-opacity"></a>
      <br><br><p class="w3-large">เรียนรู้คำศัพท์</p>
    </div>
    <div class="w3-quarter">
      <a href="index.php/Install/install" target="_blank"><img src="<?php echo base_url(); ?>assets/images/gear.png" alt="gear" class="w3-hover-opacity"></a>
      <br><br><p class="w3-large">การติดตั้งและการตั้งค่า</p>
    </div>
    <div class="w3-quarter">
      <a href="index.php/Build/build" target="_blank"><img src="<?php echo base_url(); ?>assets/images/use.png" alt="use" class="w3-hover-opacity"></a>
      <br><br><p class="w3-large">การใช้งาน Docker</p>
    </div>
  </div>
</div>

  <!-- The Tour Section -->
  <div class=" w3-blue " id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-jumbo w3-center">DOCKER</h2>
      <p class="w3-opacity w3-center"><i>ส่วนนี้เป็นเเนื้อเรื่องเกี่ยวกับ Docker ของเว็ปอื่น ๆ</i></p><br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="<?php echo base_url(); ?>assets/images/docs.png" alt="Docker docs" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Docker Docs</b></p>
            <p>เป็นเอกสาร สอนการใช้งาน Docker จากผู้พัฒนาระบบเอง</p>
            <center>
              <a href="https://docs.docker.com/get-started/"><button  class="w3-button w3-teal w3-margin-bottom w3-center" >เข้าชม</button></a>
            </center>
          </div>
        </div>

        <div class="w3-third w3-margin-bottom">
          <img src="<?php echo base_url(); ?>assets/images/tutorial.jpg" alt="Docker Tutorial" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Download Docker Tutorial</b></p>
            <p>สามารถดาวน์โหลดเอกสารการสอน การใช้งาน Docker ได้ที่นี้</p>
            <center>
              <a href="https://goo.gl/d8OwJt"><button  class="w3-button w3-teal w3-margin-bottom w3-center" >เข้าชม</button></a>
            </center>
          </div>

        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="<?php echo base_url(); ?>assets/images/github.png" alt="github" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Git Hub</b></p>
            <p>สามารถดาวน์โหลด ตัวอย่างการทำ Docker ได้ที่เว็ปไซต์ Git Hub</p>
            <center>
              <a href="https://goo.gl/NFifjL"><button  class="w3-button w3-teal w3-margin-bottom w3-center" >เข้าชม</button></a>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- The Docker Hub Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="hub">
    <h2 class="w3-wide w3-center">DOCKER HUB</h2>
    <p class="w3-opacity w3-center"><i>การสมัครใช้งาน Docker Hub เพื่อสามารถเรียก Docker Image มาใช้งาน</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
      <p>การสมัครสมาขิก Docker Hub เข้าไปที่ <a href="https://hub.docker.com">https://hub.docker.com</a> แล้วทำการกรอกข้อมูลลงในช่องต่าง ๆ ดังนี้</p>
        <i class="fa fa-user" style="width:30px"></i>Choose a Docker ID : ชื่อผู้ใช้งาน<br>
        <i class="fa fa-envelope" style="width:30px"></i>Email address : อีเมลที่ใช้ในการสมัคร<br>
        <i class="fa fa-key" style="width:30px"> </i> Choose a password : รหัสผ่าน<br>
      </div>
      <div class="w3-col m6">
        <img src="<?php echo base_url(); ?>assets/images/hub.png" alt="hub">
      </div>
    </div>
  </div>
  
<!-- Team Container -->
  <div class="w3-container w3-padding-64 w3-center w3-blue" id="team">
    <h2>OUR TEAM</h2>
    <p>รายชื่อผู้พัฒนาระบบ รวมถึงหน้าที่ในการปฏิบัติงาน</p>

    <div class="w3-row w3-center"><br><br><br>
      <div class="w3-quarter">
        <h3></h3>
        <p></p>
      </div>

      <div class="w3-quarter">
        <img src="<?php echo base_url(); ?>assets/images/singh.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
        <h3>นายปราณีต  กลั่นบุญ</h3>
        <p>นักออกแบบและพัฒนาระบบ</p>
      </div>

      <div class="w3-quarter">
        <img src="<?php echo base_url(); ?>assets/images/tum.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
        <h3>นายสรายุต พูลผล</h3>
        <p>ผู้สืบค้นข้อมูลและจัดทำแนวข้อสอบ</p>
      </div> 

    </div>
  </div> 

  <div class="w3-content w3-container w3-padding-64" id="docker_d">
    <h3>ขอขอบคุณแหล่งข้อมูลและแหล่งรูปภาพประกอบการนำเสนอจาก</h3>
    <p><a href="https://logz.io/wp-content/uploads/2016/01/docker-facebook.png" target="_blank">https://logz.io/wp-content/uploads/2016/01/docker-facebook.png</a><br>
       <a href="https://www.docker.com/sites/default/files/Docker_Survey_%232_v04.0-01.png" target="_blank">https://www.docker.com/sites/default/files/Docker_Survey_%232_v04.0-01.png</a><br>
       <a href="https://goo.gl/vHreTs" target="_blank">https://goo.gl/vHreTs</a><br>
       <a href="https://www.freepik.com" target="_blank">https://www.freepik.com</a>
       </p>

  </div>



<!-- Footer -->
<footer class="w3-container w3-padding w3-center w3-opacity w3-gray w3-xlarge">

  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="fa fa fa-arrow-circle-up"></span>
  </a><br><br>
  <a href="https://goo.gl/XLc6bJ" title="Facebook"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="https://goo.gl/PK0tFP" title="Instragram"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="https://www.snapchat.com/" title="Snapchat"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
  <a href="https://goo.gl/yflHtR" title="Pinterest"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
  <a href="https://goo.gl/5tTo59" title="Twitter"><i class="fa fa-twitter w3-hover-opacity"></i></a>
  <a href="https://goo.gl/5tTo59" title="Linkedin"><i class="fa fa-linkedin w3-hover-opacity""></i></a>
  <p class="w3-medium">© Copyright 2017, Praneed & Sarasut</p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
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
