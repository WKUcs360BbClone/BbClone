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

$sql = "SELECT student_id from Instructors WHERE username = '" . $_POST['username'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$instructor_id = $row["instructor_id"];
	}
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT course_id from Courses WHERE crn = '" . $_POST['crn'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
                $course_id = $row["course_id"];
        }
} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO Instruction (course_id, instructor_id) values ('" . $course_id . "', '" . $instructor_id . "')";

if ($conn->query($sql) === True) {

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

</body>
</html>
