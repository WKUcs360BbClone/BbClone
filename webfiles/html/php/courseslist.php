<?php

include 'idtoname.php';
include 'usernametoid.php';

//server details
$servername = "172.19.0.2";
$sql_username = "root";
$sql_password = "Bl4ckb0ard";
$database = "bbclone";

//create and test connection
$conn = new mysqli($servername, $sql_username, $sql_password, $database);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//handle student vs instructor
switch ($_SESSION['login_role'] {
	case "student":
		//define query
		$sql = "SELECT course_id FROM Enrollment WHERE student_id = '" . usernameToID($_SESSION['login_user']) . "'";
		$result = $conn->query($sql);
		$courses = array();
		
		//populates $courses
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		        	$tmp = array($row["course_id"], idToName($row["course_id"]));
				array_push($courses, $tmp);
			}
			//populate $output with hyperlinks to course page with id passed/
			$output = "";
			foreach ($courses as $value) {
				$output .= "<a href='course.php?id=";
				$output .= $value[0];
				$output .= "'>";
				$output .= $value[1];
				$output .= "</a><br>";
			}
			echo $output;
		} else {
			echo "No results";
		}

	case "instructor":
		$sql = "SELECT course_id FROM Instruction WHERE instructor_id = '" . usernameToID($_SESSION['login_user']) . "'";
                $result = $conn->query($sql);
                $courses = array();

                if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                                $tmp = array($row["course_id"], idToName($row["course_id"]));
                                array_push($courses, $tmp);
                        }

                        $output = "";
	                foreach ($courses as $value) {
        	                $output .= "<a href='course.php?id=";
                	        $output .= $value[0];
                        	$output .= "'>";
	                        $output .= $value[1];
        	                $output .= "</a><br>";
                	}
	                echo $output;
        	} else {
                	echo "No results";
	        }
}
?>
