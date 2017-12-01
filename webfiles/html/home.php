<!DOCTYPE html>
<html>
    <head>
        <title>BLACK BOARD</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container-fluid">

            <div class="jumbotron">
                


                <div class="row">

                    <div class="col-xs-6 h1">Black Board Clone</div>

                    <div class="col-xs-6"> <img src ="images\bb.jpg"  alt="images" class="image Responsive" width="150" height="150" style="float:right"></div>
                    <div class="col-xs-0 h6 text-right"></div>
                </div>
            </div>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Bb</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="courses.html">courses</a></li>

                    </ul>

                    <form class="search">
                        <input type ="text" placeholder="search">
                        <button>search</button></form>

                    <ul class="nav navbar-nav navbar-right">


                        <li><a href="registration.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                    </ul>
                </div>

            </nav>
            <div class="row">
                <div class="col-sm-2 hidden-xs"></div>

                <div class="container">
                    <div class="well well-sm">Tools</div>
                    <ul>

                        <li><a href="#">Announcement</a></li>
                        <li><a href="#">Calender</a></li>
                        <li><a href="#">Grades</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="well well-sm">My Announcements</div>

        </div>
        <div class="container">
            <div class="well well-sm">Course List</div>

            <?php include "php/courseslist.php";?>
        </div>

        <!.....footer.....>
        <div class ="footer text-center">
        <p>Bb clone &copy 2017 All right reserved</p><!.../footer...>
        </div>






        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>

</html>
