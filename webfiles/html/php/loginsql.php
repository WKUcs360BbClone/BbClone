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

//stored hash from username
$sql = "SELECT hash FROM Instructors WHERE username = '" . $_POST['username'] . "'";
$hash = $_POST['password'];

//compare password to hash and redirect to home after creating session
if ($stored = $conn->query($sql) > 0) {
	if ($hash == $stored) {
		session_start();
		$_SESSION['login_user'] = $_POST['username'];
		$_SESSION['login_role'] = 'instructor';
		header("Location: http:\/\/74.141.196.173:8080/home.php");
	} else {
		echo "Credentials not found";
	}
} elseif ($stored = $conn->$query(str_replace("Instructors", "Students", $sql)) > 0){
	if ($hash == $stored) {
		 session_start();
                $_SESSION['login_user'] = $_POST['username'];
                $_SESSION['login_role'] = 'student';
                header("Location: http:\/\/74.141.196.173:8080/home.php");
        } else {
                echo "Credentials not found";
        }
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

</body>
</html>
