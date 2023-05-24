<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body>
	<div id="topBanner">
		<img id="leftNavBtn" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" height="60px" class="leftSide">
		<h2 class="whiteText middleText spaceInTopBanner">Halifax Canoe and Kayak</h2>
		<img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" height="60px" class="topRight" >
	</div>

	<script> 
		$(document).ready(function(){
			$("#leftNavBtn").click(function(){
				$("#leftNav").slideToggle("fast");
			});
		});
	</script>

	<div id="leftNav">
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Book a Trip</a></li>
			<li><a href="">IT System</a></li>
		</ul>
	</div>
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "id20611455_oksana", "Ababa2023!", "id20611455_adventures_db");

// Check connection
if ($conn === false) {
    die("ERROR: Connection failed. " . mysqli_connect_error());
}
/* DB adventures_db
Table adventures_all 
NName advantures_db
Username oksana
Password Ababa2023!
*/
// Create a connection
?>