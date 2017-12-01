<html>
<body>

<?php

//Set server details
$servername = "172.19.0.2";
$sql_username = "root";
$sql_password = "Bl4ckb0ard";
$database = "bbclone";

//Create and test connection
$conn = new mysqli($servername, $sql_username, $sql_password, $database);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//Define query
$sql = "SELECT course_id from Courses WHERE crn = '" . $_POST['crn'] . "'";

//get course id for crn
if ($course_id = $conn->query($sql) === True) {
	
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

//Define query
$sql = "INSERT INTO Announcements (course_id, expiry_date, content) values ('" . $course_id . "', '" . $_POST['expiry_date'] . "', '" . $_POST['content'] . "')";

//Insert announcement for course id
if ($conn->query($sql) === True) {

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

</body>
</html>
