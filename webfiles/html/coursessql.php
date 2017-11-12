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

$sql = "INSERT INTO Courses (crn, department, course_name, semester, year) values ('" . $_POST['crn'] . "', '" . $_POST['department'] . "', '" . $_POST['course_name'] . "', '" . $_POST['semester'] . "', '" . $_POST['year'] . "')";

if ($conn->query($sql) === True) {

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

</body>
</html>
