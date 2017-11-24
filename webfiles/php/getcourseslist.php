<html>
<body>

<?php

include 'courseslist.php'

//This returns an array of the format (array(course id(s)), array(course name(s))
echo coursesList($_SESSION['login_user'])

?>

</body>
</html>
