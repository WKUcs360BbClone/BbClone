<html>
<body>

<?php

$servername = "172.19.0.2";
$sql_username = "root";
$sql_password = "Bl4ckb0ard";
$database = "bbclone";

$conn = new mysqli($servername, $sql_username, $sql_password, $database);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT course_id from Courses WHERE crn = '" . $_POST['crn'] . "'";

if ($course_id = $conn->query($sql) === True) {
	
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO Announcements (course_id, expiry_date, content) values ('" . $course_id . "', '" . $_POST['expiry_date'] . "', '" . $_POST['content'] . "')";

if ($conn->query($sql) === True) {

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

</body>
</html>
