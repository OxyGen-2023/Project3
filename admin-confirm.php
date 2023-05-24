<?php include 'header.php';?>

<html>
    <body class="admin-confirm-body">
        <br>
        <br>
        <br>
        <br>
<div class=containerAdmin>
<h1 class="middleText">Admin - Confirm</h1>
<br>
<br>
<br>

<?php
$heading = $_POST["heading"];
$tripDate = $_POST["tripDate"];
$duration = $_POST["duration"];
$summary = $_POST["summary"];


$sql = "INSERT INTO adventures_all (heading, tripDate, duration, summary) 
VALUES ('$heading', '$tripDate', '$duration', '$summary')";

if (mysqli_query($conn, $sql)) {
    echo "Adventure added successfully.";
} else {
    echo "Error: " . $sql . "
    " . mysqli_error($conn);
}
?>

<br>
<br>
<br>
	<br><a href="all-adventures.php">View All Adventures</a>
<br>
<br>
<br>

</div>
 
</body>
</html>


<?php include 'footer.php'; ?>
