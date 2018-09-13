<!DOCTYPE html>
<html lang="en">
<head>

  <title>index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<nav class="navbar navbar">
  <div class="container-fluid">
    <ul class="nav navbar-right">
      <li><a href="member/main_view"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/menu.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
body{
  background-color: #999999;
}
</style>
</head>


<body>

<div class="container">
  <?php
  echo form_open('member/add');
  ?>
  <br>
<form class="form-horizontal">
  <div class="form-group">
  <h2>ลงชื่อจอง</h2>
  <br><br>
      <label class="control-label col-sm-2" for="name">ชื่อ:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="กรุณากรอกชื่อ" name="u_name"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="lname">นามสกุล:</label>
      <div class="col-sm-10">
        <input type="lname" class="form-control" id="lname" placeholder="กรุณากรอกนามสกุล" name="u_lname"><br>
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="time">ชื่อเล่น:</label>
      <div class="col-sm-10">          
        <input type="nickname" class="form-control" id="nicaddkname" placeholder="กรุณากรอกชื่อเล่น" name="u_nickname"><br>
      </div>
    </div>
<div class="form-group">
      <label class="control-label col-sm-2" for="time">เวลา:</label>
      <div class="col-sm-10">
        <input type="time" class="form-control" id="time" placeholder="กรุณากรอกเวลาจอง" name="u_time"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="date">วันที่:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="date" placeholder="กรุณากรอกวันที่" name="u_date"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="time">ที่อยู่:</label>
      <div class="col-sm-10">          
        <input type="add" class="form-control" id="add" placeholder="กรุณากรอกที่อยู่" name="u_address"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tel">เบอร์โทร:</label>
      <div class="col-sm-10">          
        <input type="tel" class="form-control" id="tel" placeholder="กรุณากรอกเบอร์โทร" name="u_tel"><br>
      </div>
    </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input  type="submit" class="btn btn-primary" name="btnsave" value="ลงชื่อ">
    </div>
  <?php
  echo form_close();
  ?>

</div>
</form>