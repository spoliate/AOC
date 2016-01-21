<!DOCTYPE html>
<html lang="en">
<head>
  <title>AOC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
          .btn-circle.btn-xl {
          width: 160px;
          height: 160px;
          padding: 10px 16px;
          font-size: 24px;
          line-height: 1.33;
          border-radius: 80px;
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
              <a class="navbar-brand" href="#">AIUB Oratory Club</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
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
                <li><a href="nickName.php">Class Routine</a></li>
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
<div class="container" >
  <div class="jumbotron" style="padding-top:2px;padding-bottom:2px;">
    <h1>AIUB Oratory Club</h1>
    <p>Freedom Of Speaking</p> 
  </div>
    <div class="panel panel-default">
      <div class="panel-body">

    <div class="col-sm-3">
      <button type="button" class="btn btn-default btn-circle btn-xl"><i class="glyphicon glyphicon-star"></i><br>EC Body</button>
    </div>
    <div class="col-sm-3">
      <button type="button" class="btn btn-default btn-circle btn-xl"><i class="glyphicon glyphicon-user"></i><br>Recruitment</button>
    </div>
    <div class="col-sm-3">
      <a href="nickName.php" class="btn btn-default btn-circle btn-xl"><br><i class="glyphicon glyphicon-list-alt"></i><br>Class<br> Routine</a>
    </div>
    <div class="col-sm-3">
      <a href="boothSchedule.php" class="btn btn-default btn-circle btn-xl"><br><i class="glyphicon glyphicon-th"></i><br>Booth <br>Schedule</a>
    </div>


      </div>
    </div>


  </div>


</div>
<!--Content End -->

    </body>
</html>
