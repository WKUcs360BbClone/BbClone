<html>
<body>

<?php

include 'hash.php';

$servername = "172.19.0.2";
$sql_username = "root";
$sql_password = "Bl4ckb0ard";
$database = "bbclone";

$conn = new mysqli($servername, $sql_username, $sql_password, $database);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT course_id FROM Courses WHERE crn = '" . $_POST['crn'] . "'";

if ($course_id = $conn->query($sql) === True) {

} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "INSERT INTO Assignments (course_id, points_possible, instances_allowed, assignment_name) values ('" . $course_id . "', '" . $_POST['points_possible'] . "', '" . $_POST['instances_allowed'] . ", " . $_POST['assignment_name'] . "')"; 

if ($conn->query($sql) === True) {

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

</body>
</html>
