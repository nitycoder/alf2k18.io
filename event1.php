<?php
$link=mysqli_connect("localhost","root","","alfkcom_Data");
session_start();

 ?>
 <?php
 $id = $_SERVER["QUERY_STRING"];
 $command = "SELECT DISTINCT id,Category,SubCategory,Image FROM categories WHERE id ='".$id."'";
 if($result = mysqli_query($link, $command)){
   if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_array($result)){
       $id=$row['id'];
       $Category = $row['Category'];
       $SubCategory = $row['SubCategory'];
       $Image = $row['Image'];


     }
   }
 }
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="team.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
  <style type="text/css">

  body{

    overflow-x: hidden;
  }
  .nav{
    display: none;
  }
  .belowcontent{
    width: 70%;
  }
  @media(max-width:900px){
    .nav{
      display: unset;
      z-index: 300;
      position: relative;
    }
    body {
  overflow-x:hidden;
  overflow-y: scroll;
  width:100%;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  }
  .anc{
      color: #fff;
      text-decoration: none;
      opacity: 0.9;
  }
  #MenuIcon{
      height: 25px;
      width: 50px;
      position: absolute;
      top:20px;
      right: 20px;
  }
  #MenuIcon:hover{
      cursor: pointer;
  }
  #MenuLine{
      height: 4px;
      width: 50px;
      background-color: white;
      position: absolute;
      top:50%;
      left: 50%;
      transform: translate(-50%,-50%);
      transition: all .3s;
  }
  #MenuIcon:hover #MenuLine{
      width: 40px;
  }
  #MenuLine::before{
      content: '';
      height: 4px;
      width: 40px;
      background-color: #181818;
      position: absolute;
      margin-top: 10px;
      transition: all .3s;
  }
  #MenuIcon:hover #MenuLine::before{
      width: 50px;
  }
  #MenuLine::after{
      content: '';
      height: 4px;
      width: 40px;
      background-color:#181818;
      position: absolute;
      margin-top: -10px;
      transition: all .3s;
  }
  #MenuIcon:hover #MenuLine::after{
      width: 50px;
  }
  #MainMenu{
      height: 100vh;
      width: 180px;
      background-color: #181818;
      -webkit-clip-path:polygon(0 0,100% 0,0% 100%,0% 100%);
      position: fixed;
      top:0;
      left: -300px;
      transition: all .5s ease-in-out;
  }
  ul{
      list-style: none;
      padding: 0px;
      margin: 0px;
      font-family: arial;
      color:white;
      text-align: center;
      position: absolute;
      top:50%;
      left: 50%;
      transform: translate(-50%,-50%);
  }
  ul li{
      margin: 20px;
  }
  ul li:hover{
      cursor: pointer;
  }
  .line{
      height: 2px;
      width: 150px;
      background-color: white;
      margin-top: 10px;
      position: absolute;
      left: 50%;
      transform: translate(-50%);
      transition: all .3s;
  }
  ul li:hover .line{
      width: 170px;
  }
  #logo{
      position: absolute;
      top:100;
      left: 50%;
      transform: translate(-50%);
  }
  #close{
      position: absolute;
      bottom: 150;
      left: 50%;
      transform: translate(-50%);
  }
  #close:hover{
      cursor: pointer;
  }
  @media (max-width: 992px)
  {
.anc{
      text-decoration: none;
      text-decoration-style: none;
    }
    #MainMenu{
      opacity: 0.9;
      position: ;
    }
     #MenuIcon{
    height: ;
    width: 90px;
    margin: 0px;
    top: 20px;
    right: 10px;
    position: fixed;
    z-index: -1;
}
    #MenuLine{
      width: 50px;
      height: 4px;
       position: absolute;
         top:50%;
          left: 60%;
           transform: translate(-50%,-50%);
            transition: all .3s;

    }
      #MenuLine::before{
      content: '';
      height: 4px;
      width: 30px;
      background-color: white;
      position: absolute;
      margin-top: 10px;

      transition: all .3s;
  }
  #MenuIcon:hover #MenuLine::before{
      width: 40px;
  }
  #MenuLine::after{
      content: '';
      height: 4px;
      width: 30px;
      background-color:white;
      position: absolute;
      margin-top: -10px;
      transition: all .3s;
  }
  #MenuIcon:hover #MenuLine::after{
      width: 40px;
  }

  #close{
      bottom: -5;
      padding-bottom: -30px;
      left: 60px;
  }
  #logo{
      top: -5;
      margin: auto;
  }
  ul li{
      margin: 2px;
      padding-top: 10px;
  }
  .line{
      height: 2px;
      width: 100px;
      background-color: white;
      margin-top: 2px;
      position: relative;
      left: 50%;
      transform: translate(-50%);
      transition: all .3s;
  }
  ul li:hover .line{
      width: 110px;
  }
  #MainMenu{
      height: 100vh;
      width: 120px;

  }
  }
}
body, html {
  background: -webkit-radial-gradient(at center bottom, #272762, #000000);
background: radial-gradient(at center bottom, #272762, #000000);
    color: #fff;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}
canvas {
    position:absolute;
    top:0;
    left:0;
}

.card {
  background: #fff;
  border-radius: 2px;
  display: inline-block;
  height: 300px;
  margin: 1rem;
  position: relative;
  width: 300px;
  z-index: 200;
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-2 {
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}

.card-3 {
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}

.card-4 {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-5 {
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}


@media(max-width:900px){
  body {
overflow-x:hidden;
overflow-y: scroll;
width:100%;
-webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
        box-sizing: border-box;
}

.ftr{
display: none;
}
.footer {
  display: unset;
position: fixed;
right: 0;
bottom: 0;
left: 0;
padding: 0.5rem;
text-align: center;
background-color:#2E0D3A;
border-radius: 20px;
z-index: 310;
}
#link{
color:white;
}
#link:hover{
text-decoration:none;
color:blue;

}
}




/* LIGHTS */
div {
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
}
.left {
-webkit-animation: left 3s ease-in-out infinite;
animation: left 3s ease-in-out infinite;
background: -webkit-radial-gradient(at bottom left, rgba(255, 255, 255, 0.25), rgba(0, 0, 0, 0));
background: radial-gradient(at bottom left, rgba(255, 255, 255, 0.25), rgba(0, 0, 0, 0));
}
.right {
-webkit-animation: right 4.98s ease-in-out alternate infinite;
animation: right 4.98s ease-in-out alternate infinite;
background: -webkit-radial-gradient(at bottom right, rgba(255, 255, 255, 0.25), rgba(0, 0, 0, 0));
background: radial-gradient(at bottom right, rgba(255, 255, 255, 0.25), rgba(0, 0, 0, 0));
}

@-webkit-keyframes left {
from, to {
-webkit-clip-path: polygon(20% 0, 5% 100%, 0 100%, 0 95%, 0 0);
clip-path: polygon(20% 0, 5% 100%, 0 100%, 0 95%, 0 0);
}
50% {
-webkit-clip-path: polygon(100% 0, 5% 100%, 0 100%, 0 95%, 80% 0);
clip-path: polygon(100% 0, 5% 100%, 0 100%, 0 95%, 80% 0);
}
}
@keyframes left {
from, to {
-webkit-clip-path: polygon(20% 0, 5% 100%, 0 100%, 0 95%, 0 0);
clip-path: polygon(20% 0, 5% 100%, 0 100%, 0 95%, 0 0);
}
50% {
-webkit-clip-path: polygon(100% 0, 5% 100%, 0 100%, 0 95%, 80% 0);
clip-path: polygon(100% 0, 5% 100%, 0 100%, 0 95%, 80% 0);
}
}
@-webkit-keyframes right {
from, to {
-webkit-clip-path: polygon(100% 0, 100% 95%, 100% 100%, 95% 100%, 80% 0);
clip-path: polygon(100% 0, 100% 95%, 100% 100%, 95% 100%, 80% 0);
}
50% {
-webkit-clip-path: polygon(20% 0, 100% 95%, 100% 100%, 95% 100%, 0 0);
clip-path: polygon(20% 0, 100% 95%, 100% 100%, 95% 100%, 0 0);
}
}
@keyframes right {
from, to {
-webkit-clip-path: polygon(100% 0, 100% 95%, 100% 100%, 95% 100%, 80% 0);
clip-path: polygon(100% 0, 100% 95%, 100% 100%, 95% 100%, 80% 0);
}
50% {
-webkit-clip-path: polygon(20% 0, 100% 95%, 100% 100%, 95% 100%, 0 0);
clip-path: polygon(20% 0, 100% 95%, 100% 100%, 95% 100%, 0 0);
}
}
@media(max-width:600px){
.right{
  display: none;
}
.left{
  display: none;
}
.belowcontent{
  position: relative;
  top: 50px;
  width: 100%;
}
}
.text1{
  background-color: black;
  color: white;
}



.img{
height:40px;
}
#bookmark-ribbon2 {
width: 0;
height: 570px;
border-left: 100px solid #44164F;
border-right: 100px solid #44164F;
border-bottom: 35px solid transparent;
margin-left:20px;
position:absolute;
top:0px;
left:0px;
z-index: 130;
}

#bookmark-ribbon1 {
width: 0;
height: 560px;
border-left: 80px solid #2E0D3A;
border-right: 80px solid #2E0D3A ;
border-bottom: 35px solid transparent;
margin-left:20px;
opacity:1;
position:relative;
left:-100px;
top:-20px;
}

ul{
align:center;
}

.text{
font-size:100%;
color:white;
position:relative;
top:10px;
}
#ic{
width:100px;
height:80px;
background-color:;
position:relative;
left:-90px;
border-bottom:2px solid white;
}

#ic:hover{
background-color:#0084b4;
}

.text:hover{
color:black;
}

a{
text-decoration:none;
}

@media only screen and (max-width: 900px) {
#bookmark-ribbon1 {
display:none;
}
#bookmark-ribbon2 {
display:none;
}
}
</style>
    </head>
    <body>
      <div class="nav">
      <div id="MenuIcon" style="color:white">
          <div id="MenuLine"></div>
      </div>

      <div id="MainMenu" opacity="0.9">
        <div id="close">
          close
            <img src="Close.png" height="30px" width="30px"/>
        </div>
        <ul>
            <li><a class="anc" href="index.html">Home</a><div class="line"></div></li>
            <li><a class="anc" href="Competition.php">Cultural</a><div class="line"></div></li>
            <li><a class="anc" href="Scinnovation.php">Scinnovation</a><div class="line"></div></li>
            <li><a class="anc" href="Pro night.php">Sundowners</a><div class="line"></div></li>
            <li><a class="anc" href="Kaleidoscope.php">Kaleidoscope</a><div class="line"></div></li>
            <li><a class="anc" href="Schedule-sq.html">Schedule</a><div class="line"></div></li>
        </ul>
      </div>
    </div>
    <div id="bookmark-ribbon2">
      <div id="bookmark-ribbon1">
        <ul type="none"><br>

          <li><a href="index.html">
            <div id="ic" class="view hm-zoom link-1">
          <center><img class="img" class="img-fluid " src="home1.png">
              <div class="text">
                Home
                </div>
                </center>
            </div></a>
          </li><br>

          <li><a href="Competition.php">
            <div id="ic" class="view hm-zoom link-1">
            <center><img class="img" class="img-fluid " src="culture1.png">
              <div class="text">
                 Cultural
                </div>
              </center>
            </div></a>
          </li><br>

          <li><a href="Scinnovation.php">
            <div id="ic" class="view hm-zoom link-1">
            <center><img class="img" class="img-fluid " src="Workshop.png">
              <div class="text">
                 Scinnovation
                </div>
              </center><script>

              </script>
            </div></a>
          </li><br>

          <li><a href="Pro night.php">
            <div id="ic" class="view hm-zoom link-1">
            <center><img class="img"  class="img-fluid " src="dj.png">
              <div class="text">
                 Sundowners
                </div>
              </center>
            </div></a>
          </li><br>

          <li><a href="Kaleidoscope.php">
            <div id="ic" class="view hm-zoom link-1">
            <center><img class="img" class="img-fluid " src="klad.png">
              <div class="text">
                 Kaleidoscope
                </div>
              </center>
            </div></a>
          </li><br>
        </ul>
      </div>
    </div>
      <div class="row">
      <div class="belowcontent container">
      <center>
<h1 style="color:white;font-weight:bolder">
  <?php
    $query = "SELECT * FROM `4lf_3v3n75` WHERE SubCategory = '".mysqli_real_escape_string($link,$SubCategory )."' LIMIT 1";
    if($result=mysqli_query($link,$query)){
    while($row1 = mysqli_fetch_array($result)){
        echo $row1['SubCategory'];
      }
    } ?>
</h1>
</center>
<canvas id="canvas"></canvas>
<div class="left"></div>
<div class="right"></div>
<!-- Demo of material design box shadows based on https://medium.com/@Florian/freebie-google-material-design-shadow-helper-2a0501295a2d -->
<?php
$query = "SELECT * FROM `4lf_3v3n75` WHERE SubCategory = '".mysqli_real_escape_string($link,$SubCategory )."' ";
if($result=mysqli_query($link,$query)){
while($row1 = mysqli_fetch_array($result)){
  if($row1['Status']!=="Rejected"){
      $EVENT_NAME = $row1['Event_Title'];
      echo '<div class="card card-4 view hm-zoom" style="background-color:#2E0D3A"><a href="detail.php?' .$row1['Id']. '"><div><img src="img/'.$EVENT_NAME.'.png" height="100%" width="100%"/></div></br><div><h3 class="text1">'.$EVENT_NAME.'</h3></div></a></div>';
    }
    }
  }
?>


</div>
</div>

<footer class="footer">
  <center>
     <a href="About us.html"  id="link"> | About</a>
     <a href="Sponsors.html"  id="link"> | Sponsors</a>
     <a href="our team.html"  id="link"> | Our Team</a>
      <a href="Contact Us.html"  id="link"> | Contact Us |</a>
</center>
</footer>
<script type="text/javascript">
(function () {
    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    window.requestAnimationFrame = requestAnimationFrame;
})();


var canvas = document.getElementById("canvas"),
    ctx = canvas.getContext("2d"),
    width = 0,
    height = 0,
    vanishPointY = 0,
    vanishPointX = 0,
    focalLength = 300,
    angleX = 180,
    angleY = 180,
    angleZ = 180,
    angle = 0,
    cycle = 0,
    colors = {r : 255, g : 0, b : 0},
    lastShot = new Date().getTime();

canvas.width = width;
canvas.height = height;

/*
 *	Controls the emitter
 */
function Emitter() {
    this.reset();
}

Emitter.prototype.reset = function () {
    var PART_NUM = 200,
        x = (Math.random() * 400) - 200,
        y = (Math.random() * 400) - 200,
        z = (Math.random() * 800) - 200;

    this.x = x || 0;
    this.y = y || 0;
    this.z = z || 0;

    var color = [~~(Math.random() * 150) + 10, ~~(Math.random() * 150) + 10, ~~(Math.random() * 150) + 10]
    this.particles = [];

    for (var i = 0; i < PART_NUM; i++) {
        this.particles.push(new Particle(this.x, this.y, this.z, {
            r: colors.r,
            g: colors.g,
            b: colors.b
        }));
    }
}

Emitter.prototype.update = function () {
    var partLen = this.particles.length;

    angleY = (angle - vanishPointX) * 0.0001;
    angleX = (angle - vanishPointX) * 0.0001;

    this.particles.sort(function (a, b) {
        return b.z - a.z;
    });

    for (var i = 0; i < partLen; i++) {
        this.particles[i].update();
    }

    if(this.particles.length <= 0){
      this.reset();
    }

};

Emitter.prototype.render = function (imgData) {
    var data = imgData.data;

    for (i = 0; i < this.particles.length; i++) {
        var particle = this.particles[i],
            dist = Math.sqrt((particle.x - particle.ox) * (particle.x - particle.ox) + (particle.y - particle.oy) * (particle.y - particle.oy) + (particle.z - particle.oz) * (particle.z - particle.oz));

        if (dist > 255) {
            particle.render = false;
            this.particles.splice(i, 1);
            this.particles.length--;
        }

        if (particle.render && particle.xPos < width && particle.xPos > 0 && particle.yPos > 0 && particle.yPos < height) {
            for (w = 0; w < particle.size; w++) {
                for (h = 0; h < particle.size; h++) {
                    if (particle.xPos + w < width && particle.xPos + w > 0 && particle.yPos + h > 0 && particle.yPos + h < height) {
                        pData = (~~ (particle.xPos + w) + (~~ (particle.yPos + h) * width)) * 4;
                        data[pData] = particle.color[0];
                        data[pData + 1] = particle.color[1];
                        data[pData + 2] = particle.color[2];
                        data[pData + 3] = 255 - dist;
                    }
                }
            }
        }
    }
};


/*
 *	Controls the individual particles
 */
function Particle(x, y, z, color) {
    this.x = x;
    this.y = y;
    this.z = z;

    this.startX = this.x;
    this.startY = this.y;
    this.startZ = this.z;

    this.ox = this.x;
    this.oy = this.y;
    this.oz = this.z;

    this.xPos = 0;
    this.yPos = 0;

    this.vx = (Math.random() * 10) - 5;
    this.vy = (Math.random() * 10) - 5;
    this.vz = (Math.random() * 10) - 5;

    this.color = [color.r, color.g, color.b];
    this.render = true;

    this.size = Math.round(1 + Math.random() * 1);
}

Particle.prototype.rotate = function () {
    var x = this.startX * Math.cos(angleZ) - this.startY * Math.sin(angleZ),
        y = this.startY * Math.cos(angleZ) + this.startX * Math.sin(angleZ);

     this.x = x;
     this.y = y;
}

Particle.prototype.update = function () {
    var cosY = Math.cos(angleX),
        sinY = Math.sin(angleX);

    this.x = (this.startX += this.vx);
    this.y = (this.startY += this.vy);
    this.z = (this.startZ -= this.vz);
    this.rotate();

    this.vy += 0.1;
    this.x += this.vx;
    this.y += this.vy;
    this.z -= this.vz;

    this.render = false;

    if (this.z > -focalLength) {
        var scale = focalLength / (focalLength + this.z);

        this.size = scale * 2;
        this.xPos = vanishPointX + this.x * scale;
        this.yPos = vanishPointY + this.y * scale;
        this.render = true;
    }
};

function render() {
    colorCycle();
    angleY = Math.sin(angle += 0.01);
    angleX = Math.sin(angle);
    angleZ = Math.sin(angle);

    var imgData = ctx.createImageData(width, height);

    for (var e = 0; e < 30; e++) {
        emitters[e].update();
        emitters[e].render(imgData);
    }
    ctx.putImageData(imgData, 0, 0);
    requestAnimationFrame(render);
}

function colorCycle() {
    cycle += .6;
    if (cycle > 100) {
        cycle = 0;
    }
    colors.r = ~~ (Math.sin(.3 * cycle + 0) * 127 + 128);
    colors.g = ~~ (Math.sin(.3 * cycle + 2) * 127 + 128);
    colors.b = ~~ (Math.sin(.3 * cycle + 4) * 127 + 128);
}

var emitters = [];
for (var e = 0; e < 30; e++) {
    colorCycle();
    emitters.push(new Emitter());
}
//render();


// smart trick from @TimoHausmann for full screen pens
setTimeout(function () {
    width = canvas.width = window.innerWidth;
    height = canvas.height = document.body.offsetHeight;
    vanishPointY = height / 2;
    vanishPointX = width / 2;
    render();
}, 500);
</script>
<script src="jquery-1.10.2.min.js"></script>
<script src="JQUERY Main.js"></script>
<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
