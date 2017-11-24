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

$sql = "SELECT student_id FROM Students WHERE username = '" . $_POST['username'] . "'";

if ($student_id = $conn->query($sql) === True) {

} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT course_id FROM Courses WHERE crn = '" . $_POST['crn'] . "'";

if ($course_id = $conn->query($sql) === True) {

} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "INSERT INTO Scores (student_id, assignment_id, points_earned) values ('" . $student_id . "', '" . $assignment_id . "', '" . $_POST['points_earned'] . "')";

if ($conn->query($sql) === True) {

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

</body>
</html>
