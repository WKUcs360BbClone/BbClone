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
$sql = "SELECT student_id from Students WHERE username = '" . $_POST['username'] . "'";
$result = $conn->query($sql);

// student id from username
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$student_id = $row["student_id"];
	}
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

//Define query
$sql = "SELECT course_id from Courses WHERE crn = '" . $_POST['crn'] . "'";
$result = $conn->query($sql);

//Course id from crn
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
                $course_id = $row["course_id"];
        }
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}

//define query
$sql = "INSERT INTO Enrollment (course_id, student_id) values ('" . $course_id . "', '" . $student_id . "')";

//insert enrollment relation
if ($conn->query($sql) === True) {

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

</body>
</html>
