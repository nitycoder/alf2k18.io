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
    overflow-x:hidden;
    overflow-y: scroll;
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
max-width: 100%;
overflow-x: hidden;
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
@media(max-width:600px){
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

body{
  background-color: black;
}

#particles {
  width: 100vw;
  height: 100vh;
  margin-bottom: 15px;
  background-color: #000000;
}

.hello-world {
  position: absolute;
  top: 70%;
  font-size: 30px;
  color: white;
  left: 0;
  right: 0;
  margin: auto;
  text-align: center;
  height: 70px;
  line-height: 70px;
  background-color: rgba(60, 60, 60, 0.4);

}

</style>
    </head>
    <body>
      <div id="particles">
</div>
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
        <center><img class="img" class="img-fluid " src="culture.png">
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
<h1 style="color:white;font-weight:bolder"><?php
  $query = "SELECT * FROM `4lf_3v3n75` WHERE Category = 'Sundowners' LIMIT 1";
  if($result=mysqli_query($link,$query)){
  while($row1 = mysqli_fetch_array($result)){
      echo $row1['Category'];
    }
  } ?></h1>
</center>
<!-- Demo of material design box shadows based on https://medium.com/@Florian/freebie-google-material-design-shadow-helper-2a0501295a2d -->
<?php
$query = "SELECT * FROM `4lf_3v3n75` WHERE Category = 'Sundowners' ";
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
// Some random colors

/* Because particle ground is fun  */
/*!
 * Particleground
 *
 * @author Jonathan Nicol - @mrjnicol
 * @version 1.1.0
 * @description Creates a canvas based particle system background
 *
 * Inspired by http://requestlab.fr/ and http://disruptivebydesign.com/
 */

;(function(window, document) {
  "use strict";
  var pluginName = 'particleground';

  // http://youmightnotneedjquery.com/#deep_extend
  function extend(out) {
    out = out || {};
    for (var i = 1; i < arguments.length; i++) {
      var obj = arguments[i];
      if (!obj) continue;
      for (var key in obj) {
        if (obj.hasOwnProperty(key)) {
          if (typeof obj[key] === 'object')
            deepExtend(out[key], obj[key]);
          else
            out[key] = obj[key];
        }
      }
    }
    return out;
  };

  var $ = window.jQuery;

  function Plugin(element, options) {
    var canvasSupport = !!document.createElement('canvas').getContext;
    var canvas;
    var ctx;
    var CSS_COLOR_NAMES = ["AliceBlue","AntiqueWhite","Aqua","Aquamarine","Azure","Beige","Bisque","Black","BlanchedAlmond","Blue","BlueViolet","Brown","BurlyWood","CadetBlue","Chartreuse","Chocolate","Coral","CornflowerBlue","Cornsilk","Crimson","Cyan","DarkBlue","DarkCyan","DarkGoldenRod","DarkGray","DarkGrey","DarkGreen","DarkKhaki","DarkMagenta","DarkOliveGreen","Darkorange","DarkOrchid","DarkRed","DarkSalmon","DarkSeaGreen","DarkSlateBlue","DarkSlateGray","DarkSlateGrey","DarkTurquoise","DarkViolet","DeepPink","DeepSkyBlue","DimGray","DimGrey","DodgerBlue","FireBrick","FloralWhite","ForestGreen","Fuchsia","Gainsboro","GhostWhite","Gold","GoldenRod","Gray","Grey","Green","GreenYellow","HoneyDew","HotPink","IndianRed","Indigo","Ivory","Khaki","Lavender","LavenderBlush","LawnGreen","LemonChiffon","LightBlue","LightCoral","LightCyan","LightGoldenRodYellow","LightGray","LightGrey","LightGreen","LightPink","LightSalmon","LightSeaGreen","LightSkyBlue","LightSlateGray","LightSlateGrey","LightSteelBlue","LightYellow","Lime","LimeGreen","Linen","Magenta","Maroon","MediumAquaMarine","MediumBlue","MediumOrchid","MediumPurple","MediumSeaGreen","MediumSlateBlue","MediumSpringGreen","MediumTurquoise","MediumVioletRed","MidnightBlue","MintCream","MistyRose","Moccasin","NavajoWhite","Navy","OldLace","Olive","OliveDrab","Orange","OrangeRed","Orchid","PaleGoldenRod","PaleGreen","PaleTurquoise","PaleVioletRed","PapayaWhip","PeachPuff","Peru","Pink","Plum","PowderBlue","Purple","Red","RosyBrown","RoyalBlue","SaddleBrown","Salmon","SandyBrown","SeaGreen","SeaShell","Sienna","Silver","SkyBlue","SlateBlue","SlateGray","SlateGrey","Snow","SpringGreen","SteelBlue","Tan","Teal","Thistle","Tomato","Turquoise","Violet","Wheat","White","WhiteSmoke","Yellow","YellowGreen"];

    var particles = [];
    var raf;
    var mouseX = 0;
    var mouseY = 0;
    var winW;
    var winH;
    var desktop = !navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i);
    var orientationSupport = !!window.DeviceOrientationEvent;
    var tiltX = 0;
    var pointerX;
    var pointerY;
    var tiltY = 0;
    var paused = false;

    options = extend({}, window[pluginName].defaults, options);

    /**
     * Init
     */
    function init() {
      if (!canvasSupport) { return; }

      //Create canvas
      canvas = document.createElement('canvas');
      canvas.className = 'pg-canvas';
      canvas.style.display = 'block';
      element.insertBefore(canvas, element.firstChild);
      ctx = canvas.getContext('2d');
      styleCanvas();

      // Create particles
      var numParticles = Math.round((canvas.width * canvas.height) / options.density);
      for (var i = 0; i < numParticles; i++) {
        var p = new Particle();
        p.setStackPos(i);
        particles.push(p);
      };

      window.addEventListener('resize', function() {
        resizeHandler();
      }, false);

      document.addEventListener('mousemove', function(e) {
        mouseX = e.pageX;
        mouseY = e.pageY;
      }, false);

      if (orientationSupport && !desktop) {
        window.addEventListener('deviceorientation', function () {
          // Contrain tilt range to [-30,30]
          tiltY = Math.min(Math.max(-event.beta, -30), 30);
          tiltX = Math.min(Math.max(-event.gamma, -30), 30);
        }, true);
      }

      draw();
      hook('onInit');
    }

    /**
     * Style the canvas
     */
    function styleCanvas() {
      canvas.width = element.offsetWidth;
      canvas.height = element.offsetHeight;
      ctx.fillStyle = '#000';

      ctx.lineWidth = options.lineWidth;
    }

    /**
     * Draw particles
     */
    function draw() {
      if (!canvasSupport) { return; }

      winW = window.innerWidth;
      winH = window.innerHeight;

      // Wipe canvas
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      // Update particle positions
      for (var i = 0; i < particles.length; i++) {
        particles[i].updatePosition();
      };
      // Draw particles
      for (var i = 0; i < particles.length; i++) {
        particles[i].draw();
      };

      // Call this function next time screen is redrawn
      if (!paused) {
        raf = requestAnimationFrame(draw);
      }
    }

    /**
     * Add/remove particles.
     */
    function resizeHandler() {
      // Resize the canvas
      styleCanvas();

      var elWidth = element.offsetWidth;
      var elHeight = element.offsetHeight;

      // Remove particles that are outside the canvas
      for (var i = particles.length - 1; i >= 0; i--) {
        if (particles[i].position.x > elWidth || particles[i].position.y > elHeight) {
          particles.splice(i, 1);
        }
      };

      // Adjust particle density
      var numParticles = Math.round((canvas.width * canvas.height) / options.density);
      if (numParticles > particles.length) {
        while (numParticles > particles.length) {
          var p = new Particle();
          particles.push(p);
        }
      } else if (numParticles < particles.length) {
        particles.splice(numParticles);
      }

      // Re-index particles
      for (i = particles.length - 1; i >= 0; i--) {
        particles[i].setStackPos(i);
      };
    }

    /**
     * Pause particle system
     */
    function pause() {
      paused = true;
    }

    /**
     * Start particle system
     */
    function start() {
      paused = false;
      draw();
    }

    /**
     * Particle
     */
    function Particle() {
      this.stackPos;
      this.active = true;
      this.layer = Math.ceil(Math.random() * 3);
      this.parallaxOffsetX = 0;
      this.parallaxOffsetY = 0;
      // Initial particle position
      this.position = {
        x: Math.ceil(Math.random() * canvas.width),
        y: Math.ceil(Math.random() * canvas.height)
      }
      // Random particle speed, within min and max values
      this.speed = {}

      switch (options.directionX) {
        case 'left':
          this.speed.x = +(-options.maxSpeedX + (Math.random() * options.maxSpeedX) - options.minSpeedX).toFixed(2);
          break;
        case 'right':
          this.speed.x = +((Math.random() * options.maxSpeedX) + options.minSpeedX).toFixed(2);
          break;
        default:
          this.speed.x = +((-options.maxSpeedX / 2) + (Math.random() * options.maxSpeedX)).toFixed(2);
          this.speed.x += this.speed.x > 0 ? options.minSpeedX : -options.minSpeedX;
          break;
      }
      switch (options.directionY) {
        case 'up':
          this.speed.y = +(-options.maxSpeedY + (Math.random() * options.maxSpeedY) - options.minSpeedY).toFixed(2);
          break;
        case 'down':
          this.speed.y = +((Math.random() * options.maxSpeedY) + options.minSpeedY).toFixed(2);
          break;
        default:
          this.speed.y = +((-options.maxSpeedY / 2) + (Math.random() * options.maxSpeedY)).toFixed(2);
          this.speed.x += this.speed.y > 0 ? options.minSpeedY : -options.minSpeedY;
          break;
      }
    }

    /**
     * Draw particle
     */
    Particle.prototype.draw = function() {
      // Draw circle
      ctx.beginPath();
      ctx.arc(this.position.x + this.parallaxOffsetX, this.position.y + this.parallaxOffsetY, 100 /(Math.floor(Math.random() * 100) + 5) ,Math.PI * 4,0,0, true);
      //drawArc(150, 70, 60, 0,   100, true,  "green","white");

      ctx.strokeStyle = CSS_COLOR_NAMES[Math.floor(Math.random() * 20) + 1 ];
        ctx.fillStyle = ctx.strokeStyle;
      ctx.closePath();
      ctx.stroke();

        ctx.fill();
      // Draw lines
      ctx.beginPath();
      // Iterate over all particles which are higher in the stack than this one
      for (var i = particles.length - 1; i > this.stackPos; i--) {
        var p2 = particles[i];

        // Pythagorus theorum to get distance between two points
        var a = this.position.x - p2.position.x
        var b = this.position.y - p2.position.y
        var dist = Math.sqrt((a * a) + (b * b)).toFixed(2);

        // If the two particles are in proximity, join them
        if (dist < options.proximity) {
          ctx.moveTo(this.position.x + this.parallaxOffsetX, this.position.y + this.parallaxOffsetY);
          if (options.curvedLines) {
            ctx.quadraticCurveTo(Math.max(p2.position.x, p2.position.x), Math.min(p2.position.y, p2.position.y), p2.position.x + p2.parallaxOffsetX, p2.position.y + p2.parallaxOffsetY);
          } else {
            ctx.lineTo(p2.position.x + p2.parallaxOffsetX, p2.position.y + p2.parallaxOffsetY);
          }
        }
      }
      ctx.stroke();
      ctx.closePath();
    }

    /**
     * update particle position
     */
    Particle.prototype.updatePosition = function() {
      if (options.parallax) {
        if (orientationSupport && !desktop) {
          // Map tiltX range [-30,30] to range [0,winW]
          var ratioX = (winW - 0) / (30 - -30);
          pointerX = (tiltX - -30) * ratioX + 0;
          // Map tiltY range [-30,30] to range [0,winH]
          var ratioY = (winH - 0) / (30 - -30);
          pointerY = (tiltY - -30) * ratioY + 0;
        } else {
          pointerX = mouseX;
          pointerY = mouseY;
        }
        // Calculate parallax offsets
        this.parallaxTargX = (pointerX - (winW / 2)) / (options.parallaxMultiplier * this.layer);
        this.parallaxOffsetX += (this.parallaxTargX - this.parallaxOffsetX) / 50; // Easing equation
        this.parallaxTargY = (pointerY - (winH / 2)) / (options.parallaxMultiplier * this.layer);
        this.parallaxOffsetY += (this.parallaxTargY - this.parallaxOffsetY) / 50; // Easing equation
      }

      var elWidth = element.offsetWidth;
      var elHeight = element.offsetHeight;

      switch (options.directionX) {
        case 'left':
          if (this.position.x + this.speed.x + this.parallaxOffsetX < 0) {
            this.position.x = elWidth - this.parallaxOffsetX;
          }
          break;
        case 'right':
          if (this.position.x + this.speed.x + this.parallaxOffsetX > elWidth) {
            this.position.x = 0 - this.parallaxOffsetX;
          }
          break;
        default:
          // If particle has reached edge of canvas, reverse its direction
          if (this.position.x + this.speed.x + this.parallaxOffsetX > elWidth || this.position.x + this.speed.x + this.parallaxOffsetX < 0) {
            this.speed.x = -this.speed.x;
          }
          break;
      }

      switch (options.directionY) {
        case 'up':
          if (this.position.y + this.speed.y + this.parallaxOffsetY < 0) {
            this.position.y = elHeight - this.parallaxOffsetY;
          }
          break;
        case 'down':
          if (this.position.y + this.speed.y + this.parallaxOffsetY > elHeight) {
            this.position.y = 0 - this.parallaxOffsetY;
          }
          break;
        default:
          // If particle has reached edge of canvas, reverse its direction
          if (this.position.y + this.speed.y + this.parallaxOffsetY > elHeight || this.position.y + this.speed.y + this.parallaxOffsetY < 0) {
            this.speed.y = -this.speed.y;
          }
          break;
      }

      // Move particle
      this.position.x += this.speed.x;
      this.position.y += this.speed.y;
    }

    /**
     * Setter: particle stacking position
     */
    Particle.prototype.setStackPos = function(i) {
      this.stackPos = i;
    }

    function option (key, val) {
      if (val) {
        options[key] = val;
      } else {
        return options[key];
      }
    }

    function destroy() {
      console.log('destroy');
      canvas.parentNode.removeChild(canvas);
      hook('onDestroy');
      if ($) {
        $(element).removeData('plugin_' + pluginName);
      }
    }

    function hook(hookName) {
      if (options[hookName] !== undefined) {
        options[hookName].call(element);
      }
    }

    init();

    return {
      option: option,
      destroy: destroy,
      start: start,
      pause: pause
    };
  }

  window[pluginName] = function(elem, options) {
    return new Plugin(elem, options);
  };

  window[pluginName].defaults = {
    minSpeedX: 0.1,
    maxSpeedX: 1.2,
    minSpeedY: 0.1,
    maxSpeedY: 1.2,
    directionX: 'center',
    directionY: 'center',
    density: 10000,
    lineWidth: 1,
    curvedLines: false,
    proximity: 0,
    parallax: true,
    parallaxMultiplier: 1,
    onInit: function() {},
    onDestroy: function() {}
  };

  // nothing wrong with hooking into jQuery if it's there...
  if ($) {
    $.fn[pluginName] = function(options) {
      if (typeof arguments[0] === 'string') {
        var methodName = arguments[0];
        var args = Array.prototype.slice.call(arguments, 1);
        var returnVal;
        this.each(function() {
          if ($.data(this, 'plugin_' + pluginName) && typeof $.data(this, 'plugin_' + pluginName)[methodName] === 'function') {
            returnVal = $.data(this, 'plugin_' + pluginName)[methodName].apply(this, args);
          }
        });
        if (returnVal !== undefined){
          return returnVal;
        } else {
          return this;
        }
      } else if (typeof options === "object" || !options) {
        return this.each(function() {
          if (!$.data(this, 'plugin_' + pluginName)) {
            $.data(this, 'plugin_' + pluginName, new Plugin(this, options));
          }
        });
      }
    };
  }

})(window, document);

/**
 * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
 * @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/
 * @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
 * @license: MIT license
 */
(function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
                                 || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame)
      window.requestAnimationFrame = function(callback, element) {
        var currTime = new Date().getTime();
        var timeToCall = Math.max(0, 16 - (currTime - lastTime));
        var id = window.setTimeout(function() { callback(currTime + timeToCall); },
          timeToCall);
        lastTime = currTime + timeToCall;
        return id;
      };

    if (!window.cancelAnimationFrame)
      window.cancelAnimationFrame = function(id) {
        clearTimeout(id);
      };
}());

document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('particles'), {
  });
}, true);

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
