$servername = "172.19.0.2";
$sql_username = "root";
$sql_password = "Bl4ckb0ard";
$database = "bbclone";

$conn = new mysqli($servername, $sql_username, $sql_password, $database);

if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
}


          $sql = "SELECT content FROM Announcements WHERE course_id = " . $_GET['id'];
          $result = $conn->query($sql);
          $content = array();


          if ($result->num_rows > 0) {
                       while ($row = $result->fetch_assoc()){
                                array_push($content, $row['content']);

                                }
          } else {
                    echo "Error: " . $sql . "<br>" . $conn-error;
 
                        }
                        




        

?>

</body>
</html>
