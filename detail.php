<?php
$link=mysqli_connect("localhost","root","","alfkcom_Data");
session_start();

 ?>
 <?php
 $id = $_SERVER["QUERY_STRING"];
 $command = "SELECT DISTINCT
 Id,Event_Title,Event_host,Event_Duration,Event_Image,Event_Venue,Event_Participation_fee,Event_About_Tab,Event_Rules_Tab,Event_prelimround,Event_judgment,facultyname,facultycontact,facultyemail,noofteams,Participationeachteam,outsideguest,generalrequirements,otherrequirements,tentativebudget,Event_Status,Event_Total_students,Event_Paid_students,Event_Creater_Name,membername1,membercontact1,memberemail1,membername2,membercontact2,memberemail2,membername3,membercontact3,memberemail3,facultyname2,facultycontact2,facultyemail2,facultyname3,facultycontact3,facultyemail3 FROM 4lf_3v3n75 WHERE Id ='".$id."'";
 if($result = mysqli_query($link, $command)){
   if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_array($result)){
       $id=$row['Id'];
       $About_Event=$row['Event_About_Tab'];
       $EVENT_NAME=$row['Event_Title'];
       $Event_Rules=$row['Event_Rules_Tab'];

       $Judgment_Criteria=$row['Event_judgment'];
       $Name_of_Event_Cor=$row['membername1'];
       $Event_Cor_Contact_No=$row['membercontact1'];

       $Venue=$row['Event_Venue'];
       $Schedule=$row['Event_Duration'];
       $Participation_Fees=$row['Event_Participation_fee'];
     }
   }
 }
 ?>

<!DOCTYPE html>
<html>

<head>

<title><?php echo $EVENT_NAME ?></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
 <link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="team.css">
<link rel="stylesheet" type="text/css" href="footer.css">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Cookie|Raleway" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

		<link  rel="stylesheet" href="competition.css">
<style type="text/css">

.link_button {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    border: solid 1px #20538D;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
    background: #4479BA;
    color: #FFF;
    padding: 8px 12px;
    text-decoration: none;
}
.link_button:hover{
  text-decoration: none;
}
</style>
</head>

<body style="text-align: justify;">

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
				<li><a class="anc" href="index.php">Home</a><div class="line"></div></li>
				<li><a class="anc" href="Competition.php">Cultural</a><div class="line"></div></li>
				<li><a class="anc" href="Scinnovation.php">Scinnovation</a><div class="line"></div></li>
				<li><a class="anc" href="Pro night.php">Sundowners</a><div class="line"></div></li>
				<li><a class="anc" href="Kaleidoscope.php">Kaleidoscope</a><div class="line"></div></li>
				<li><a class="anc" href="Schedule.html">Schedule</a><div class="line"></div></li>
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
<center>
</br>
</br>
<div id="topDiv">
<div id="header">
 <?php echo $EVENT_NAME ?>
</div>
<div id="description">
 <table cellpadding="5px">
	<tr>
		<td><b>Schedule (Date & Time):</b></td>
		<td><?php echo $Schedule ?></td>
	<tr>
	<tr>
		<td><b>Venue:</b></td>
		<td><?php echo $Venue ?></td>
	<tr>
	<tr>
		<td><b>Participation Fees:</b></td>
		<td><?php echo $Participation_Fees ?></td>
	<tr>
 </table>
</br>
 <?php
 echo '<center><a href="detail.php?'.$id.'" class="link_button">Register For Event</a></center>';
 ?>
</div>
</div>

<div class="nittop">
<center>
<div class="" style="color:white">
  <button class="w3-bar-item w3-button" onclick="openCity('London')">About </button>
  <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Rules</button>
	<button class="w3-bar-item w3-button" onclick="openCity('Mumbai')">Contact</button>
  </div>
</center>

<div id="London" class="w3-container city">
  <h2>About Event</h2>
  <p style="text-align:left;"><?php echo $About_Event ?></p>
	<h2>Judgment Criteria</h2>
  <p><?php echo $Judgment_Criteria ?></p>
</div>

<div id="Paris" class="w3-container city" style="display:none">
  <h2>Rules</h2>

	<p style="text-align:left;"><?php echo $Event_Rules ?></p>
</div>

<div id="Mumbai" class="w3-container city" style="display:none">
  <h2>Contact</h2>
  <p><b>Name of Event Cor. <?php echo $Name_of_Event_Cor ?></b>: </br>
	   <b>Event Cor. Contact No. <?php echo $Event_Cor_Contact_No ?></b>: </p>
</div>


</div>
</center>
<footer class="footer">
  <center>
     <a href="About us.html"  id="link"> | About</a>
     <a href="Sponsors.html"  id="link"> | Sponsors</a>
     <a href="our team.html"  id="link"> | Our Team</a>
      <a href="Gallery.html"  id="link"> | Gallery |</a>
</center>
</footer>
<script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    document.getElementById(cityName).style.display = "block";
}
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
