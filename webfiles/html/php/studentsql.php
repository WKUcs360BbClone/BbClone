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

$sql = "INSERT INTO Students (username, hash, email, firstname, lastname) values ('" . $_POST['username'] . "', '" . encrypt($_POST['hash']) . "', '" . $_POST['email'] . "', '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "')";

if ($conn->query($sql) === True) {

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

</body>
</html>
