<?php
ob_start();
session_start();
include 'config.php';
if(isset($_REQUEST['submit']))
{
    $name= $_REQUEST['name'];
    $query="SELECT name FROM routine.sunday WHERE name = '$name' OR UNION SELECT name FROM routine.monday WHERE name = '$name' UNION SELECT name FROM routine.tuesday WHERE name = '$name' UNION SELECT name FROM routine.wednesday WHERE name = '$name'";
    $r=  mysqli_query($conn, $query);
    if($rows=  mysqli_fetch_assoc($r))
    {
        echo '<script language="javascript">alert("Name Exists")</script>';
    }
    else
    {
        $_SESSION['name']=$_REQUEST['name'];
        header('Location:classSchedule.php');
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>AOC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <style>
        input[type="text"] {
             position: relative;
             display: block;
             margin : 0 auto;
        }
    </style>
</head>
    <body>
<!--Navigation Start-->
        <nav class="navbar navbar-inverse" style="border-radius:0px;">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="index.php">AIUB Oratory Club</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                    <!--<li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                      </ul>
                    </li>-->
                <li><a href="#">EC Body</a></li>
                <li><a href="#">Member List</a></li>
                <li><a href="#">Recruitment</a></li>
                <li class="active"><a href="#">Class Routine</a></li>
                <li><a href="boothSchedule.php">View Booth Schedule</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>
          </div>
        </nav>
<!--Navigation End-->
<!--Content Start -->
<div class="container">
  <div class="jumbotron" style="height:auto;text-align:center;">
    <h2>Write Your Nick Name Here </h2>
     <form role="form" action="" method="post">
      <label for="usr">Ex:"Parvez"</label>
      <div class="form-group">
        <input type="text" class="form-control" id="usr" style="width:280px" name="name" autofocus>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</div>
<!--Content End -->

    </body>
</html>
