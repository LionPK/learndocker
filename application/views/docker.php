<!DOCTYPE html>
<html>
<title>การใช้งาน Docker</title>
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
    background-image: url("<?php echo base_url(); ?>assets/images/blackguard.jpg");
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
    <a href="#use" class="w3-bar-item w3-button w3-hide-small">USE DOCKER</a>

    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#benifits" class="w3-bar-item w3-button" onclick="toggleFunction()">USE DOCKER</a>

  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">การใช้งาน <span class="w3-hide-small">Docker</span></span>
  </div>
</div>

<!-- Container about-->
<div class="w3-content w3-container w3-padding-64" id="use">
  
<p>1. เตรียมความพร้อม<br>เปิด “Docker Toolbox terminal” ขึ่นมาเราจะพบกับเจ้า MobyDock และรายละเอียดต่าง ๆ ได้แก่ ชื่อ Machine default และ IP 192.168.99.100 โดย IP ที่แสดงตอนนี้ให้เราทดเก็บไว้ในใจเป็น #1 ก่อน นะครับ (แตล่ะคนอาจได้ไม่เหมือนกัน) เพราะจะได้เอาไปใช้ในขั้นตอนหลัง</p>
  <center><img src="<?php echo base_url(); ?>assets/images/d39.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Docker Toolbox terminal" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center>
  
  <p>2. เตรียมไฟล์เว็บไซต์ <br> ก่อนอื่นเราจะสร้างไฟล์เว็บไซต์ของเราไว้ที่ ~/web โดยจะใช้วิธี pull ไฟล์ลงมาจาก git </p>
   <center><img src="<?php echo base_url(); ?>assets/images/d40.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การสร้างไฟล์เว็บไซต์ของเราไว้ที่~/web" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>
   <center><img src="<?php echo base_url(); ?>assets/images/d41.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การสร้างไฟล์เว็บไซต์ของเราไว้ที่~/web" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center>

  <p>หลังจากพิมพ์คำสั่งไปแล้ว ให้เราลองพิมพ์คำสั่ง ls จะพบว่าในโฟลเดอร์ ~/web ของเรามีไฟล์ index.html และ mobydock.png เข้ามาแล้วครับ</p>
  <p>3. ดาวน์โหลด Docker Image<br>ในขั้นตอนนี้เราจะดาวน์โหลด web server และทำความรู้จักกับ Docker image ครับ ผมเลือกใช้ Docker image ที่ชื่อว่า Nginx ซึ่งมันก็คือ Application Nginx ที่ถูกปรับแต่งจนมาอยู่ใน รูปแบบ Docker image นั่นเอง ใน Docker เราสามารถโหลดมันมาเก็บไว้ในเครื่องด้วยคำสั่ง</p>
   <center><img src="<?php echo base_url(); ?>assets/images/d42.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การดาวน์โหลด Docker Image" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center>
   
   <p>หลังจากเรารันคำสั่ง ผลคือ Docker จะไปค้นหา Docker image ที่ชื่อว่า nginx ที่ Docker Hubและโหลดลงมาให้เราครับ เราสามารถเลือกเวอร์ชั่นที่ต้องการด้วยการกำกับ tag ลงไปกับชื่อ เช่น nginx:1.9 หมายถึง nginx เวอร์ชั่น 1.9 และหากเราไม่กำหนด tag หรือ กำหนดว่า nginx:latest นั่นหมายถึงให้เอาเวอร์ชั่นล่าสุด</p>
   <p>4. รัน Container<br>ในขั้นตอนนี้เราจะติดตั้ง web server เพื่อให้มันเริ่มทำงานและทำความรู้จักกับ Docker  container</p>
   <center><img src="<?php echo base_url(); ?>assets/images/d43.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การดาวน์โหลด Docker Image" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center>

   <p>หลังจากเรารันคำสั่ง ผลคือ Docker จะสร้างสภาพแวดล้อมเสมือนการจำลอง OS Linux ขึ้นมาใหม่ สำหรับรัน Application นี้โดยเฉพาะ เราเรียกมันว่า Container ซึ่ง Container จะอยู่ในเครื่องLinux ตามที่ผมได้อธิบายไปเมื่อต้นบทความครับ จากนั้น Docker ก็จะติดตั้งไฟล์และทำงานตามคำสั่งที่คนสร้าง Docker image ได้กำหนดไว้ครับ โดยเพื่อความง่ายในการเข้าใจผมจะแยก Command ออกเป็นชุด ๆ และอธิบายดังนี้<br><br><B>docker run</B> เป็นคำสั่งที่สั่งให้ docker สร้าง Container<br><B>--name hellomobydock</B> เป็นการกำหนดให้ Container นี้ชื่อว่า hellomobydock การตั้งชื่อเป็นทางเลือกจะตั้งหรือไม่ก็ได้ครับ ถ้ามีชื่อเราก็อ้างอิงได้ง่ายขึ้นแต่ถ้าไม่มีก็ใช้ CONTAINER ID แทนได้<br><B>-v ~/web:/usr/share/nginx/html:ro</B> เป็นการสร้างประตูมิติ (Volume) ให้กับ Container (ข้อมูลจะถูกแบ่งด้วย colon: ) โดยด้านซ้ายคือ path ในเครื่องของเรา และด้านขวาคือ path ใน Container ครับ ตัวอย่างเช่น Container ของ nginx จะอ่านไฟล์เว็บที่ /usr/share/nginx/html (ซึ่งโฟลเดอร์นี้อยู่ใน Container อีกชั้นนึง) แต่ไฟล์เว็บของเราอยู่ข้างนอก Container เราจึงต้องผูก ~/web เข้ากับ /usr/share/nginx/html ครับ จากนี้เมื่อ nginx อ่าน/เขียนไฟล์ที่ /usr/share/nginx/html ก็จะเป็นการทำงานที่ ~/web แทนครับ เหมือนประตูมิติ ส่วนตรง :ro เป็น optional ใช้ระบุว่าให้ อ่านเท่านั้น (read only)<br><B>-p 80:80</B> เป็นการผูก Port ที่เชื่อมกันระหว่าง Linux และ Container ด้านซ้ายคือ port ใน Linux และ ด้านขวาคือ port ใน Container เนื่องจากใน Container แต่ละตัวจะเหมือน OS ที่มีสภาพแวดล้อมแยกออกมาต่างหากเพราะฉะนั้นเขาจะมี Port เป็นของตัวเอง การที่เราผูก Port  80:80 นั่นหมายถึงถ้าใช้งาน port 80 บน Linux เมื่อไหร่ให้ทะลุไปทำงานยัง Container นี้ที่ port 80 โดยอัตโนมัติ (port 80 บน Container nginx คือ web server)<br><B>-d</B> เป็นการบอกให้ Container ทำงานในเบื่องหลัง ถ้าไม่มีคำสั่งนี้ เราจะเห็นการทำงานของ Container ผ่าน Console ทันที ซึ่งเมื่อปิด Console จึงหมายถึงการหยุด Container เช่นกันครับ การสั่งให้มันทำงานเบื่องหลังทำให้ไม่ส่งผลกระทบเมื่อเราปิด Console ลงไป<br><B>nginx:1.9</B> เป็นการบอกชื่อ image และ tag ที่ต้องการสร้างเป็น Container เราสามารถตรวจสอบ Container ทั้งหมดที่กำลังทำงานอยู่ด้วยคำสัง docker ps ครับ จากภาพจะเห็นว่า มี Container 1 ตัวทำงานอยู่ ซึ่งก็คือ hellomobydock ที่เราสั่งรันไปเมื่อสักครู่</p>
   <center><img src="<?php echo base_url(); ?>assets/images/d44.PNG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การตรวจสอบการทำงานของ Container ด้วยคำสั่ง docker ps" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center>

    <p>คำสั่งของ Container ที่ใช้บ่อยๆ</p>
      <B>docker ps</B> ดู Container ทั้งหมดเฉพาะที่กำลังทำงานอยู่ เอาไว้ใช้ดู CONTAINER_ID ได้ด้วยครับ<br>
      <B>docker ps -a</B> ดู Container ทั้งหมดรวมถึงตัวที่ stop pause หรือทำงานเสร็จแล้ว<br>
      <B>docker stop CONTAINER_ID</B> หยุดการทำงาน Container<br>
      <B>docker start CONTAINER_ID</B> เริ่มการทำงาน Container<br>
      <B>docker rm CONTAINER_ID</B> ลบ Container  (ต้อง stop หรือ kill ก่อน)<br>
      <B>docker inspect CONTAINER_ID</B> ดูข้อมูล Container อย่างละเอียด<br>
      <B>docker logs CONTAINER_ID</B> ดูข้อมูลการทำงานของ Container<br>
      <B>docker exec -it CONTAINER_ID bash</B> เข้าไปที่เครื่อง Container (เหมือน SSH เข้าไป)<br>
      
    <p>5. แสดงผล<br>มาถึงขั้นตอนนี้ให้เอา #1 ที่ทดไว้ในตั้งแต่ขั้นตอนที่ 1 ออกมาใช้ครับ อย่างของผมจะเป็น 192.168.99.100 ก็ให้เอา IP นี้ไปเปิดบน Browser จะพบว่าสามารถเข้าเว็บได้แล้ว สาเหตทุี่เราเปิดเว็บ ได้เพราะว่า 192.168.99.100 คือ IP เครื่อง Linux ของเรา เมื่อเราเรียกผ่าน http จะเป็นการเรียกใช้งาน port 80 โดยอัตโนมัติจากนั้นเมื่อ Linux ได้รับข้อมูลว่ามีการเรียกใช้งาน port 80 เจ้า Docker ก็จะไป ตรวจสอบว่า port นี้ได้ผูกกับ Container ไหนไว้หรือไม่ซึ่งก็จะพบ Container hellomobydock ของเราที่ ผูก Port 80 ไว้จึงส่งต่อข้อมูลเข้าไปยัง Port 80 ของ Container ตัวนั้น ส่งผลให้ nginx ที่รออยู่ทำงาน และแสดงผลออกมาเป็น html นั้นเอง </p>
    <center><img src="<?php echo base_url(); ?>assets/images/d45.PNG"class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="การแสดงผล" width="500" height="333" onclick="onClick(this)" class="w3-hover-opacity"></center><br>

    <center><a href="https://goo.gl/0zblGp" target="_blank"><button type="button" class="btn btn-success">QUIZ</button></a></center></br>

    <p>ขอขอบคุณแหล่งข้อมูลจาก <a href="https://www.jaynarol.com/understand-docker/" target="_blank">https://www.jaynarol.com/understand-docker/</a></p>

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
 
<!-- Add Google Maps -->
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
