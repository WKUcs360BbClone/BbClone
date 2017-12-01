<html>
<body>

<?php

//Server details
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
$sql = "SELECT course_id FROM Courses WHERE crn = '" . $_POST['crn'] . "'";
$result = $conn->query($sql);

//course id from crn
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$course_id = $row;
	}
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}

//define query
$sql = "INSERT INTO Assignments (course_id, points_possible, instances_allowed, assignment_name) values ('" . $course_id . "', '" . $_POST['points_possible'] . "', '" . $_POST['instances_allowed'] . ", " . $_POST['assignment_name'] . "')"; 

//insert assignment data
if ($conn->query($sql) === True) {

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

</body>
</html>
