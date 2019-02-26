<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Arvo|Quicksand" rel="stylesheet">

	<title></title>
	<style type="text/css">
      body{
      margin:0px;
      border:0px;
      }
      
      #top{
      background-color:purple;
      width:100%;
      height:130px;
      position:fixed;
      opacity:0.9;
      color:white;
      }
      
      th{
      font-size:130%;
      }
      
      h1{
      font-family:Arvo;
      }
      
      td{
      font-family:Quicksand;
      }
      
      
	</style>
</head>
  
<body>
<div id="top">
    <h1 align="center" class="sc">Schedule of Events</h1>
    <h1 align="center">March 17</h1>
</div>
  
  <div id="srNo" align="center">
<br><br><br><br><br><br>
    <br>
    <br>
    <br>
  <table cellspacing='30' align=center>
  <tr align="center">
    <th>Sr no.</th>
    <th>Event Name</th>
    <th>Time</th>
    <th>Venue</th>
    <th>Department</th>
  </tr>
  
<?php

$link=mysqli_connect("shareddb-i.hosting.stackcp.net","alf123-3335961d","nityasharma123","alf123-3335961d");


$query = "SELECT * FROM `mytable` ";
if($result=mysqli_query($link,$query)){ 
  while($row1 = mysqli_fetch_array($result)){
  
  echo "<tr align='center'>"."<td>".$row1['SNO']."</td>"."<td>".$row1['Events']."</td>"."<td>".$row1['Time']."</td>"."<td>".$row1['Venue']."</td>"."<td>".$row1['Department']."</td>";	
    
  
}
}

?>
    </table>    

  </div>
    </body>
</html>
