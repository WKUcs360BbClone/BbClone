<?php
	try {
		//bring in the db variables
		require "vars.php";

		//create connection
		$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => false));
		//prepare statement
		$query = $conn->prepare("SELECT Announcements.announcement_title, Announcements.content, Courses.coursename, Instructors.firstname, Instructors.lastname, Announcements.post_date FROM Announcements, Courses, Instructors WHERE Announcements.instructor_id = Instructors.instructor_id AND Announcements.course_id = Courses.course_id");

  	//execute the query
		$query->execute();

		//create results array to send back
		$results = array();

		//iterate through the results if need be
		while($row = $query->fetch()) {
			//push elements into results array which we want
			$myJson["title"] = $row["announcement_title"];
			$myJson["content"] = $row["content"];
			$myJson["postto"] = $row["coursename"];
			$myJson["postby_first"] = $row["firstname"];
			$myJson["postby_last"] = $row["lastname"];
			$myJson["poston"] = $row["post_date"];
			array_push($results, $myJson);
		}

		// Prepare JSON to send back.
		header('Content-Type: application/json');
		//create JSON to send back
		echo json_encode($results);

		//close connection
		$conn = null;
	} catch(PDOException $e) {
		print($e->getMessage);
	}
?>
