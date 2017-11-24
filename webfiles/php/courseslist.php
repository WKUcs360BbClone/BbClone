<html>
<body>

<?php

include 'idtoname.php';

function coursesList(var username) {
	$servername = "172.19.0.2";
	$sql_username = "root";
	$sql_password = "Bl4ckb0ard";
	$database = "bbclone";

	$conn = new mysqli($servername, $sql_username, $sql_password, $database);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	switch ($_SESSION['login_role']) {
		case 'instructor':
			$sql = "SELECT course_id FROM Instruction WHERE username = '" . $_SESSION['login_user'] . "'";
			$result = $conn->query($sql);
			$ids = array();
			$names = array();

			if ($result->num_rows > 0) {
			        while ($row = $result->fetch_assoc()){
                			array_push($ids, $row['course_id']);
					array_push($names, idToName($row['course_id']));
	        		}
			} else {
			        echo "Error: " . $sql . "<br>" . $conn->error;
				return false;
			}

			return array($ids, $names);

		case 'student':
			$sql = "SELECT course_id FROM Enrollment WHERE username = '" . $_SESSION['l$
                	$result = $conn->query($sql);
	                $ids = array();
			$names = array();

                	if ($result->num_rows > 0) {
                        	while ($row = $result->fetch_assoc()){
                                	array_push($ids, $row['course_id']);
					array_push($names, idToName($row['course_id']));
        	                }
	                } else {
        	                echo "Error: " . $sql . "<br>" . $conn->error;
				return false;
	                }

			return array($ids, $names);
	}
}
?>

</body>
</html>
