<!DOCTYPE html>
<?php
include 'config.php';
$data=array();
?>
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
                <li><a href="#">EC Body</a></li>
                <li><a href="#">Member List</a></li>
                <li><a href="#">Recruitment</a></li>
                <li><a href="nickName.php">Class Routine</a></li>
                <li class="active"><a href="#">View Booth Schedule</a></li>
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
           <h3> <b>Spring Semester Booth Schedule</b> </h3>
  </div>
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Sunday</a></li>
            <li><a data-toggle="tab" href="#menu1">Monday</a></li>
            <li><a data-toggle="tab" href="#menu2">Tuesday</a></li>
            <li><a data-toggle="tab" href="#menu3">Wednesday</a></li>
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <!--Sunday View Start-->
              <h3>Sunday</h3>
                      <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>8-9.30</th>
                                    <th>9.30-11</th>
                                    <th>11-12.30</th>
                                    <th>12.30-2</th>
                                    <th>2-3.30</th>
                                    <th>3.30-5</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    
                                  <tr>          
                                    <td><?php $query="SELECT `8-9.30` FROM sunday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) {  if($rows['8-9.30'] != "NULL"){ echo $rows['8-9.30']."<br>";$data[0]=$rows['8-9.30'];}else {continue;}}?></td> 
                                            
                                    <td><?php $query="SELECT `9.30-11` FROM sunday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['9.30-11'] != "NULL"){ echo $rows['9.30-11']."<br>";$data[1]=$rows['9.30-11'];}else {continue;}}?></td>
                                    
                                    <td><?php $query="SELECT `11-12.30` FROM sunday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['11-12.30'] != "NULL"){ echo $rows['11-12.30']."<br>";}else {continue;}}?></td>
                                    
                                    <td><?php $query="SELECT `12.30-2` FROM sunday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['12.30-2'] != "NULL"){ echo $rows['12.30-2']."<br>";}else {continue;}}?></td>
                                    
                                    <td><?php $query="SELECT `2-3.30` FROM sunday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['2-3.30'] != "NULL"){ echo $rows['2-3.30']."<br>";}else {continue;}}?></td>
                                    
                                    <td><?php $query="SELECT `3.30-5` FROM sunday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['3.30-5'] != "NULL"){ echo $rows['3.30-5']."<br>";}else {continue;}}?></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8">
                          <a href="pdfS.php" class="btn btn-default">Save as PDF</a>
                          <?php print_r($data); ?>
                      </div>
                  </div>
              </div>
                    <!--Sunday View Ends-->

            </div>
            <div id="menu1" class="tab-pane fade">
              <h3>Monday</h3>
              <!--Monday View Starts-->
                  <div class="container">
                              <div class="row">
                                  <div class="col-lg-8">
                                      <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>8-9.30</th>
                          <th>9.30-11</th>
                          <th>11-12.30</th>
                          <th>12.30-2</th>
                          <th>2-3.30</th>
                          <th>3.30-5</th>
                        </tr>
                      </thead>
                      <tbody>
                          
                        <tr>
                            
                            <td><?php $query="SELECT `8-9.30` FROM monday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) {  if($rows['8-9.30'] != "NULL"){ echo $rows['8-9.30']."<br>";}else {continue;}}?></td>
                        
                                  
                          <td><?php $query="SELECT `9.30-11` FROM monday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['9.30-11'] != "NULL"){ echo $rows['9.30-11']."<br>";}else {continue;}}?></td>
                          
                          <td><?php $query="SELECT `11-12.30` FROM monday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['11-12.30'] != "NULL"){ echo $rows['11-12.30']."<br>";}else {continue;}}?></td>
                          
                          <td><?php $query="SELECT `12.30-2` FROM monday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['12.30-2'] != "NULL"){ echo $rows['12.30-2']."<br>";}else {continue;}}?></td>
                          
                          <td><?php $query="SELECT `2-3.30` FROM monday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['2-3.30'] != "NULL"){ echo $rows['2-3.30']."<br>";}else {continue;}}?></td>
                          
                          <td><?php $query="SELECT `3.30-5` FROM monday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['3.30-5'] != "NULL"){ echo $rows['3.30-5']."<br>";}else {continue;}}?></td>
                        </tr>
                        
                        
                      </tbody>
                    </table>
                                  </div>
                                  
                              </div>
                          </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8">
                          <a href="pdfM.php" class="btn btn-default">Save as PDF</a>
                      </div>
                  </div>
              </div>
                  
              <!--Monday View Ends-->
            </div>
            <div id="menu2" class="tab-pane fade">
              <h3>Tuesday</h3>
              <!--Tuesday View Starts-->
                  <div class="container">
                              <div class="row">
                                  <div class="col-lg-8">
                                      <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>8-9.30</th>
                          <th>9.30-11</th>
                          <th>11-12.30</th>
                          <th>12.30-2</th>
                          <th>2-3.30</th>
                          <th>3.30-5</th>
                        </tr>
                      </thead>
                      <tbody>
                          
                        <tr>
                            
                            <td><?php $query="SELECT `8-9.30` FROM tuesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) {  if($rows['8-9.30'] != "NULL"){ echo $rows['8-9.30']."<br>";}else {continue;}}?></td>
                        
                                  
                          <td><?php $query="SELECT `9.30-11` FROM tuesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['9.30-11'] != "NULL"){ echo $rows['9.30-11']."<br>";}else {continue;}}?></td>
                          
                          <td><?php $query="SELECT `11-12.30` FROM tuesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['11-12.30'] != "NULL"){ echo $rows['11-12.30']."<br>";}else {continue;}}?></td>
                          
                          <td><?php $query="SELECT `12.30-2` FROM tuesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['12.30-2'] != "NULL"){ echo $rows['12.30-2']."<br>";}else {continue;}}?></td>
                          
                          <td><?php $query="SELECT `2-3.30` FROM tuesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['2-3.30'] != "NULL"){ echo $rows['2-3.30']."<br>";}else {continue;}}?></td>
                          
                          <td><?php $query="SELECT `3.30-5` FROM tuesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['3.30-5'] != "NULL"){ echo $rows['3.30-5']."<br>";}else {continue;}}?></td>
                        </tr>
                        
                        
                      </tbody>
                    </table>
                                  </div>
                              </div>
                          </div>
                       
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8">
                          <a href="pdfT.php" class="btn btn-default">Save as PDF</a>
                      </div>
                  </div>
              </div>
              <!--Tuesday View Ends-->
            </div>
            <div id="menu3" class="tab-pane fade">
              <h3>Wednesday</h3>
              <!--Wednesday View Starts-->
                <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>8-9.30</th>
                        <th>9.30-11</th>
                        <th>11-12.30</th>
                        <th>12.30-2</th>
                        <th>2-3.30</th>
                        <th>3.30-5</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                      <tr>
                          
                          <td><?php $query="SELECT `8-9.30` FROM wednesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) {  if($rows['8-9.30'] != "NULL"){ echo $rows['8-9.30']."<br>";}else {continue;}}?></td>
                      
                                
                        <td><?php $query="SELECT `9.30-11` FROM wednesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['9.30-11'] != "NULL"){ echo $rows['9.30-11']."<br>";}else {continue;}}?></td>
                        
                        <td><?php $query="SELECT `11-12.30` FROM wednesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['11-12.30'] != "NULL"){ echo $rows['11-12.30']."<br>";}else {continue;}}?></td>
                        
                        <td><?php $query="SELECT `12.30-2` FROM wednesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['12.30-2'] != "NULL"){ echo $rows['12.30-2']."<br>";}else {continue;}}?></td>
                        
                        <td><?php $query="SELECT `2-3.30` FROM wednesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['2-3.30'] != "NULL"){ echo $rows['2-3.30']."<br>";}else {continue;}}?></td>
                        
                        <td><?php $query="SELECT `3.30-5` FROM wednesday";$result=mysqli_query($conn, $query); while($rows=  mysqli_fetch_assoc($result)) { if ($rows['3.30-5'] != "NULL"){ echo $rows['3.30-5']."<br>";}else {continue;}}?></td>
                      </tr>
                      
                      
                    </tbody>
                  </table>
                                </div>
                            </div>
                        </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-8">
                          <a href="pdfW.php" class="btn btn-default">Save as PDF</a>
                      </div>
                  </div>
              </div>
              <!--Wednesday View Ends-->
            </div>
          </div>
</div>
<!--Content End -->

    </body>
</html>
