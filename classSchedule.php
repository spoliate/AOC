<?php
ob_start();
session_start();
include 'config.php';
if(isset($_REQUEST['submit']))
{
    $_SESSION['name']=$_REQUEST['name'];
    //echo "Below";

}
/* Sunday Insert */

if(isset($_REQUEST['ssubmit'])){
    $name=$_SESSION['name'];
    $eight="NULL";
    $nine="NULL";
    $eleven="NULL";
    $twelve="NULL";
    $two="NULL";
    $three="NULL";
    if(!isset($_REQUEST['8'])){
        $eight=$name;
    }
    if(!isset($_REQUEST['9'])){
        $nine=$name;
    }
    if(!isset($_REQUEST['11'])){
        $eleven=$name;
    }
    if(!isset($_REQUEST['12'])){
        $twelve=$name;
    }
    if(!isset($_REQUEST['2'])){
        $two=$name;
    }
    if(!isset($_REQUEST['3'])){
        $three=$name;
    }
    //echo $eight;
    $query="INSERT INTO `sunday`(`name`, `8-9.30`, `9.30-11`, `11-12.30`, `12.30-2`, `2-3.30`, `3.30-5`) VALUES ('$name','$eight','$nine','$eleven','$twelve','$two','$three') ";
    $insert=  mysqli_query($conn, $query);
    if($insert){
        //echo "Successfull";
        echo '<script language="javascript">alert("Sunday Routine Inserted Thanks.")</script>';
    }else{
        echo "Failed";
    }
}

/* Monday Insert */

if(isset($_REQUEST['msubmit'])){
    $name=$_SESSION['name'];
    $eight="NULL";
    $nine="NULL";
    $eleven="NULL";
    $twelve="NULL";
    $two="NULL";
    $three="NULL";
    if(!isset($_REQUEST['8'])){
        $eight=$name;
    }
    if(!isset($_REQUEST['9'])){
        $nine=$name;
    }
    if(!isset($_REQUEST['11'])){
        $eleven=$name;
    }
    if(!isset($_REQUEST['12'])){
        $twelve=$name;
    }
    if(!isset($_REQUEST['2'])){
        $two=$name;
    }
    if(!isset($_REQUEST['3'])){
        $three=$name;
    }
    //echo $eight;
    $query="INSERT INTO `monday`(`name`, `8-9.30`, `9.30-11`, `11-12.30`, `12.30-2`, `2-3.30`, `3.30-5`) VALUES ('$name','$eight','$nine','$eleven','$twelve','$two','$three') ";
    $insert=  mysqli_query($conn, $query);
    if($insert){
        //echo "Successfull";
        echo '<script language="javascript">alert("Monday Routine Inserted Thanks.")</script>';
    }else{
        echo "Failed";
    }
}

/* Tuesday Insert */

if(isset($_REQUEST['tsubmit'])){
    $name=$_SESSION['name'];
    $eight="NULL";
    $nine="NULL";
    $eleven="NULL";
    $twelve="NULL";
    $two="NULL";
    $three="NULL";
    if(!isset($_REQUEST['8'])){
        $eight=$name;
    }
    if(!isset($_REQUEST['9'])){
        $nine=$name;
    }
    if(!isset($_REQUEST['11'])){
        $eleven=$name;
    }
    if(!isset($_REQUEST['12'])){
        $twelve=$name;
    }
    if(!isset($_REQUEST['2'])){
        $two=$name;
    }
    if(!isset($_REQUEST['3'])){
        $three=$name;
    }
    //echo $eight;
    $query="INSERT INTO `tuesday`(`name`, `8-9.30`, `9.30-11`, `11-12.30`, `12.30-2`, `2-3.30`, `3.30-5`) VALUES ('$name','$eight','$nine','$eleven','$twelve','$two','$three') ";
    $insert=  mysqli_query($conn, $query);
    if($insert){
        //echo "Successfull";
        echo '<script language="javascript">alert("Tuesday Routine Inserted Thanks.")</script>';
    }else{
        echo "Failed";
    }
}

/* Wednesday Insert */

if(isset($_REQUEST['wsubmit'])){
    $name=$_SESSION['name'];
    $eight="NULL";
    $nine="NULL";
    $eleven="NULL";
    $twelve="NULL";
    $two="NULL";
    $three="NULL";
    if(!isset($_REQUEST['8'])){
        $eight=$name;
    }
    if(!isset($_REQUEST['9'])){
        $nine=$name;
    }
    if(!isset($_REQUEST['11'])){
        $eleven=$name;
    }
    if(!isset($_REQUEST['12'])){
        $twelve=$name;
    }
    if(!isset($_REQUEST['2'])){
        $two=$name;
    }
    if(!isset($_REQUEST['3'])){
        $three=$name;
    }
    //echo $eight;
    $query="INSERT INTO `wednesday`(`name`, `8-9.30`, `9.30-11`, `11-12.30`, `12.30-2`, `2-3.30`, `3.30-5`) VALUES ('$name','$eight','$nine','$eleven','$twelve','$two','$three') ";
    $insert=  mysqli_query($conn, $query);
    if($insert){
        //echo "Successfull";
        echo '<script language="javascript">alert("Wednesday Routine Inserted Thanks.")</script>';
    }else{
        echo "Failed";
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
                <li ><a href="index.php">Home</a></li>
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
<div class="container">
  <div class="jumbotron" style="padding-top:2px;padding-bottom:2px;">
           <h3> <b><?php echo $_SESSION['name']; ?></b> , Provide Your Class Schedule Here</h3>
  </div>
      <h3>Select Day By Tabs</h3>
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Sunday</a></li>
          <li><a data-toggle="tab" href="#menu1">Monday</a></li>
          <li><a data-toggle="tab" href="#menu2">Tuesday</a></li>
          <li><a data-toggle="tab" href="#menu3">Wednesday</a></li>
        </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <!--Start-->
            <div class="row">
                <div class="col-lg-8">
                    <h3><b>Sunday Insert</b></h3>
                    <div class="form-group">
                        <form class="form-horizontal" action="" method="post">
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">8-9.30</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="8" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">9.30-11</label>
                            <div class="col-sm-10">
                              <input type="checkbox" name="9" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">11-12.30</label>
                            <div class="col-sm-10">
                              <input type="checkbox" name="11" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">12.30-2</label>
                            <div class="col-sm-10">
                              <input type="checkbox" name="12" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">2-3.30</label>
                            <div class="col-sm-10">
                              <input type="checkbox" name="2" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">3.30-5</label>
                            <div class="col-sm-10">
                              <input type="checkbox" name="3" value="">
                            </div>
                          </div>                        
                                                    
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button name="ssubmit" type="submit" class="btn btn-default">Submit</button>
                            </div>
                          </div>
                      </form>
                </div>
            </div>
        </div>

            <!--End-->  
          </div>
          <div id="menu1" class="tab-pane fade">
            <!--Start-->
                        <div class="row">
                <div class="col-lg-8">
                    <h3><b>Monday Insert</b></h3>
                    <div class="form-group">
                        <form class="form-horizontal" action="" method="post">

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">8-9.30</label>
    <div class="col-sm-10">
        <input type="checkbox" name="8" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">9.30-11</label>
    <div class="col-sm-10">
      <input type="checkbox" name="9" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">11-12.30</label>
    <div class="col-sm-10">
      <input type="checkbox" name="11" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">12.30-2</label>
    <div class="col-sm-10">
      <input type="checkbox" name="12" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">2-3.30</label>
    <div class="col-sm-10">
      <input type="checkbox" name="2" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">3.30-5</label>
    <div class="col-sm-10">
      <input type="checkbox" name="3" value="">
    </div>
  </div>                        
                          
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button name="msubmit" type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
                </div>
            </div>
        </div>
            <!--End-->
          </div>
          <div id="menu2" class="tab-pane fade">
            <!--Start-->
            <div class="row">
                <div class="col-lg-8">
                    <h3><b>Tuesday Insert</b></h3>
                    <div class="form-group">
                        <form class="form-horizontal" action="" method="post">

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">8-9.30</label>
    <div class="col-sm-10">
        <input type="checkbox" name="8" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">9.30-11</label>
    <div class="col-sm-10">
      <input type="checkbox" name="9" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">11-12.30</label>
    <div class="col-sm-10">
      <input type="checkbox" name="11" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">12.30-2</label>
    <div class="col-sm-10">
      <input type="checkbox" name="12" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">2-3.30</label>
    <div class="col-sm-10">
      <input type="checkbox" name="2" value="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">3.30-5</label>
    <div class="col-sm-10">
      <input type="checkbox" name="3" value="">
    </div>
  </div>                        
                          
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button name="tsubmit" type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
                </div>
            </div>
        </div>
            <!--End-->
          </div>
          <div id="menu3" class="tab-pane fade">
            <!--Start-->
                        <div class="row">
                <div class="col-lg-8">
                    <h3><b>Wednesday Insert</b></h3>
                    <div class="form-group">
                        <form class="form-horizontal" action="" method="post">

                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">8-9.30</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="8" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">9.30-11</label>
                            <div class="col-sm-10">
                              <input type="checkbox" name="9" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">11-12.30</label>
                            <div class="col-sm-10">
                              <input type="checkbox" name="11" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">12.30-2</label>
                            <div class="col-sm-10">
                              <input type="checkbox" name="12" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">2-3.30</label>
                            <div class="col-sm-10">
                              <input type="checkbox" name="2" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">3.30-5</label>
                            <div class="col-sm-10">
                              <input type="checkbox" name="3" value="">
                            </div>
                          </div>                        
                                                  
                          
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button name="wsubmit" type="submit" class="btn btn-default">Submit</button>
                            </div>
                          </div>
                        </form>
                </div>
            </div>
        </div>
            <!---End-->
          </div>
        </div>

</div>
  
<!--Content End -->

    </body>
</html>
