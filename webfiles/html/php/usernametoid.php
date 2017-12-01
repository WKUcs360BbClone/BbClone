<html>
<body>

<?php

//Server details
function usernameToID($username){
$servername = "172.19.0.2";
$sql_username = "root";
$sql_password = "Bl4ckb0ard";
$database = "bbclone";

//Create and test connection
$conn = new mysqli($servername, $sql_username, $sql_password, $database);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//define query
$sql = "SELECT instructor_id FROM Instructors WHERE username = '" . $username . "'";
$result = $conn->query($sql);

//instructor id from username
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
	return $row["instructor_id"];
	}
} else {
	//student id from username
	$sql = "SELECT student_id FROM Students WHERE username = '" . $username . "'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			return $row["student_id"];
		}
	}
}
}

?>

</body>
</html>
