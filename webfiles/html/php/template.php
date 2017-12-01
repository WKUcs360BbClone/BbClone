<?php
	try {
		//bring in the db variables
		require "vars.php";
		//grab variables from input via JSON
		//$var = $_POST["var"];
		//create connection
		$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => false));
		//prepare statement
		$query = $conn->prepare(/*sql query*/);
		//bind values
		$query->bindValue(/*data to bind*/); //If we see an error here, add PDO::PARAM_INT as an arg to the bind_param. Place I took it from said it might trip up if not included and an integer is being passed through
		//execute the query
		$query->execute();
		//create results array to send back
		$results = array();
		//iterate through the results if need be
		while($row = $query->fetch()) {
			//push elements into results array which we want
			$jsonRow->var = val;
			array_push($results, $jsonRow);
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
	} catch(PDOException $e) {
		print($e->getMessage);
	}
?>
