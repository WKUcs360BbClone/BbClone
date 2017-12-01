<html>
<body>

<?php
function idToName($course_id) {
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

	//define query
	$sql = "SELECT coursename FROM Courses WHERE course_id = '" . $course_id . "'";
	$result= $conn->query($sql);

	//course name from course id
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()){
			return $row['coursename'];
		}
	} else {
		return "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>

</body>
</html>
