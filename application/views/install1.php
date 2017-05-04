<!DOCTYPE html>
<html>
<title>การใช้งาน Docker</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
    body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
    }

    /* สร้าง Parallax Effect */
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* รูปแรกให้มีความสูง 100% */
    .bgimg-1 {
        background-image: url("<?php echo base_url(); ?>assets/images/b1.jpg");
        min-height: px;
    }

    /* ภาพที่สองที่จะนำไปใช้ในส่วนของ ภาพสวยๆ */
    .bgimg-2 {
        background-image: url("<?php echo base_url(); ?>assets/images/");
        min-height: 400px;
    }

    /* ภาพที่สามใช้ในสวนของการติดต่อ*/
    .bgimg-3 {
        background-image: url("<?php echo base_url(); ?>assets/images/");
        min-height: 400px;
    }

    .w3-wide {letter-spacing: 10px;}
    .w3-hover-opacity {cursor: pointer;}

    /* ปิดภาพเมื่อมีการเลื่อนเกิดขึ้น*/
    @media only screen and (max-device-width: 1024px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
        }
    }
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
 

  <!-- Navbar on small screens -->
 
</div>

<!-- Header -->

<header class="bgimg-1 w3-container w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo"><font color="black">การใช้งาน Docker</font></h1>
  
</header>





<!-- First Grid -->
<div class="w3-row-padding w3-light-grey  w3-padding-64 w3-container">
  <div class="w3-content">
  <h1>1. การใช้งาน Docker</h1>
    
     
      
 <font size="5"><h5 class="w3-padding-32"><dd>1.1 เตรียมความพร้อม</font></h5>
<div class="w3-center">
<img src="<?php echo base_url(); ?>assets/images/d39.PNG" alt="Test image" style="width:100%" class=" w3-hover-opacity" > </div>
  
  <font size="5"><h5 class="w3-padding-32"><dd>เปิด “Docker Toolbox terminal” ขึ้นมาเราจะพบกับเจ้า MobyDock และรายละเอียดต่างๆได้แก่ ชื่อ Machine default และ IP 192.168.99.100 โดย IP ที่แสดงตอนนี้ให้เราทดเก็บไว้ในใจเป็น #1 ก่อนนะครับ (แต่ละคนอาจได้ไม่เหมือนกัน) เพราะจะได้เอาไปใช้ในขั้นตอนหลังๆ<br><br>1.2 เตรียมไฟล์เว็บไซต์<br>ก่อนอื่นเราจะสร้างไฟล์เว็บไซต์ของเราไว้ที่ ~/web โดยจะใช้วิธี pull ไฟล์ลงมาจาก git เลยนะครับจะได้ไม่เสียเวลา</font><br></h5>
  <img src="<?php echo base_url(); ?>assets/images/d40.PNG" alt="Test image" style="width:100%" class=" w3-hover-opacity" >
  <img src="<?php echo base_url(); ?>assets/images/d41.PNG" alt="Test image" style="width:100%" class=" w3-hover-opacity" >
  <font size="5"><h5 class="w3-padding-32"><dd>หลังจากพิมพ์คำสั่งไปแล้ว ให้เราลองพิมพ์คำสั่ง ls จะพบว่าในโฟลเดอร์ ~/web ของเรามีไฟล์     
index.html และ mobydock.png เข้ามาแล้วครับ เสร็จขั้นตอนที่ 2<br><br>1.3 ดาวน์โหลด Docker image<br>ในขั้นตอนนี้เราจะดาวน์โหลด web server และทำความรู้จักกับ Docker image ครับ ผมเลือกใช้ Docker image ที่ชื่อว่า Nginx ซึ่งมันก็คือ Application Nginx ที่ถูกปรับแต่งจนมาอยู่ใน รูปแบบ Docker image นั่นเอง ใน Docker เราสามารถโหลดมันมาเก็บไว้ในเครื่องด้วยคำสั่ง</font><br></h5>
  <img src="<?php echo base_url(); ?>assets/images/d42.PNG" alt="Test image" style="width:100%" class=" w3-hover-opacity" >
  <font size="5"><h5 class="w3-padding-32"><dd>หลังจากเรารันคำสั่ง ผลคือ Docker จะไปค้นหา Docker image ที่ชื่อว่า nginx ที่ Docker Hubและโหลดลงมาให้เราครับ เราสามารถเลือกเวอร์ชั่นที่ต้องการด้วยการกำกับ tag ลงไปกับชื่อ เช่น nginx:1.9 หมายถึง nginx เวอร์ชั่น 1.9 และหากเราไม่กำหนด tag หรือ กำหนดว่า nginx:latest นั่นหมายถึงให้เอาเวอร์ชั่นล่าสุด<br><br>1.4 รัน Container<br>ในขั้นตอนนี้เราจะติดตั้ง web server เพื่อให้มันเริ่มทำงานและทำความรู้จักกับ Docker  container
</font><br></h5>
  <img src="<?php echo base_url(); ?>assets/images/d43.PNG" alt="Test image" style="width:100%" class=" w3-hover-opacity" >
  <font size="5"><h5 class="w3-padding-32"><dd>หลังจากเรารันคำสั่ง ผลคือ Docker จะสร้างสภาพแวดล้อมเสมือนการจำลอง OS Linux ขึ้นมาใหม่ สำหรับรัน Application นี้โดยเฉพาะ เราเรียกมันว่า Container ซึ่ง Container จะอยู่ในเครื่องLinux ตามที่ผมได้อธิบายไปเมื่อต้นบทความครับ จากนั้น Docker ก็จะติดตั้งไฟล์และทำงานตามคำสั่งที่คนสร้าง Docker image ได้กำหนดไว้ครับ โดยเพื่อความง่ายในการเข้าใจผมจะแยก Command ออกเป็นชุดๆและอธิบายดังนี้<br><br><B>docker run</B> เป็นคำสั่งที่สั่งให้ docker สร้าง Container<br><B>--name hellomobydock</B> เป็นการกำหนดให้ Container นี้ชื่อว่า hellomobydock การตั้งชื่อเป็นทางเลือกจะตั้งหรือไม่ก็ได้ครับ ถ้ามีชื่อเราก็อ้างอิงได้ง่ายขึ้นแต่ถ้าไม่มีก็ใช้ CONTAINER ID แทนได้<br><B>-v ~/web:/usr/share/nginx/html:ro</B> เป็นการสร้างประตูมิติ (Volume) ให้กับ Container (ข้อมูลจะถูกแบ่งด้วย colon: ) โดยด้านซ้ายคือ path ในเครื่องของเรา และด้านขวาคือ path ใน Container ครับ ตัวอย่างเช่น Container ของ nginx จะอ่านไฟล์เว็บที่ /usr/share/nginx/html (ซึ่งโฟลเดอร์นี้อยู่ใน Container อีกชั้นนึง) แต่ไฟล์เว็บของเราอยู่ข้างนอก Container เราจึงต้องผูก ~/web เข้ากับ /usr/share/nginx/html ครับ จากนี้เมื่อ nginx อ่าน/เขียนไฟล์ที่ /usr/share/nginx/html ก็จะเป็นการทำงานที่ ~/web แทนครับ เหมือนประตูมิติ ส่วนตรง :ro เป็น optional ใช้ระบุว่าให้ อ่านเท่านั้น (read only)<br><B>-p 80:80</B> เป็นการผูก Port ที่เชื่อมกันระหว่าง Linux และ Container ด้านซ้ายคือ port ใน Linux และ ด้านขวาคือ port ใน Container เนื่องจากใน Container แต่ละตัวจะเหมือน OS ที่มีสภาพแวดล้อมแยกออกมาต่างหากเพราะฉะนั้นเขาจะมี Port เป็นของตัวเอง การที่เราผูก Port  80:80 นั่นหมายถึงถ้าใช้งาน port 80 บน Linux เมื่อไหร่ให้ทะลุไปทำงานยัง Container นี้ที่ port 80 โดยอัตโนมัติ (port 80 บน Container nginx คือ web server)<br><B>-d</B> เป็นการบอกให้ Container ทำงานในเบื่องหลัง ถ้าไม่มีคำสั่งนี้ เราจะเห็นการทำงานของ Container ผ่าน Console ทันที ซึ่งเมื่อปิด Console จึงหมายถึงการหยุด Container เช่นกันครับ การสั่งให้มันทำงานเบื่องหลังทำให้ไม่ส่งผลกระทบเมื่อเราปิด Console ลงไป<br><B>nginx:1.9</B> เป็นการบอกชื่อ image และ tag ที่ต้องการสร้างเป็น Container<br><br>เราสามารถตรวจสอบ Container ทั้งหมดที่กำลังทำงานอยู่ด้วยคำสั่ง docker ps ครับ จากภาพจะเห็นว่า มี Container 1 ตัวทำงานอยู่ ซึ่งก็คือ hellomobydock ที่เราสั่งรันไปเมื่อสักครู่</font><br></h5>
<img src="<?php echo base_url(); ?>assets/images/d44.PNG" alt="Test image" style="width:100%" class=" w3-hover-opacity" >
  <font size="5"><h5 class="w3-padding-32"><dd>กับคำสั่งของ Container ที่ใช้บ่อยๆ<br><br><B>docker ps</B> ดู Container ทั้งหมดเฉพาะที่กำลังทำงานอยู่ เอาไว้ใช้ดู CONTAINER_ID ได้ด้วยครับ<br>
<B>docker ps -a</B> ดู Container ทั้งหมดรวมถึงตัวที่ stop pause หรือทำงานเสร็จแล้ว<br>
<B>docker stop CONTAINER_ID</B> หยุดการทำงาน Container<br>
<B>docker start CONTAINER_ID</B> เริ่มการทำงาน Container<br>
<B>docker rm CONTAINER_ID</B> ลบ Container  (ต้อง stop หรือ kill ก่อน)<br>
<B>docker inspect CONTAINER_ID</B> ดูข้อมูล Container อย่างละเอียด<br>
<B>docker logs CONTAINER_ID</B> ดูข้อมูลการทำงานของ Container<br>
<B>docker exec -it CONTAINER_ID bash</B> เข้าไปที่เครื่อง Container (เหมือน SSH เข้าไป)<br><br>1.5 แสดงผล
</font><br></h5>
  <img src="<?php echo base_url(); ?>assets/images/d45.PNG" alt="Test image" style="width:100%" class=" w3-hover-opacity" >
  

      </div>
      </div>
    </div>
 
  </div>
</div>

<!-- Second Grid -->

<!-- First Grid -->

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-xlarge">แหล่งอ้างอิง  <a href="https://goo.gl/0atDjb" target="_blank">https://goo.gl/0atDjb</a></p></h1>
</div>



<script>
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
