<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body{
      background-color: #999999;
    }
  </style>
</head>
<body>
<?php

?>
<br><br><br>
<div class="container">
 
  <?php
  //echo anchor("welcome/show","showdata");
  echo form_open('member/editt2',$rs);
  ?>
<form class="form-horizontal" action="insert.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">name:</label>
    <div class="col-sm-10">
    <input type="hidden" name="u_id" value="<?php echo $rs['u_id']?>">
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="u_name" value="<?php echo $rs['u_name']?>"><br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">nickname:</label>
    <div class="col-sm-10">
    <input type="hidden" name="u_id" value="<?php echo $rs['u_id']?>">
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="u_nickname" value="<?php echo $rs['u_nickname']?>"><br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">tel:</label>
    <div class="col-sm-10">
    <input type="hidden" name="u_id" value="<?php echo $rs['u_id']?>">
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="u_tel" value="<?php echo $rs['u_tel']?>"><br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">date:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="date" placeholder="Enter password" name="u_date" value="<?php echo $rs['u_date']?>"><br>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">time:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="time" placeholder="Enter password" name="u_time" value="<?php echo $rs['u_time']?>"><br>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" name="btnsave" value="บันทึก">
    </div>
  
<?php
echo form_close();
?>
</div>
</form>