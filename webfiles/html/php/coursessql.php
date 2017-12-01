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
$sql = "INSERT INTO Courses (crn, department, coursename, semester, year) values ('" . $_POST['crn'] . "', '" . $_POST['department'] . "', '" . $_POST['course_name'] . "', '" . $_POST['semester'] . "', '" . $_POST['year'] . "')";

//Insert course
if ($conn->query($sql) === True) {

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

</body>
</html>
