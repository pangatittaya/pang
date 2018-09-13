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

<body>

<nav class="navbar navbar">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="member/main_view"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
body {
    background-color: #999999;
}
</style>
</head>
<body>

<div class="container">
  <h2>ตารางการจองห้องประชุม</h2>
  <p></p>            
  <br><br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ชื่อ</th>
        <th>ชื่อเล่น</th>
        <th>เบอร์โทร</th>
        <th>วันที่</th>
        <th>เวลา</th>   
        <th>แก้ไข</th>
        <th>ลบ</th>  
      </tr>
    </thead>
    
    </tbody><?php foreach ($rs as $r){ ?>
    <tbody>
      <tr>
        <td><?php echo $r['u_name']; ?></td>
        <td><?php echo $r['u_nickname']; ?></td>
        <td><?php echo $r['u_tel']; ?></td>
        <td><?php echo $r['u_date']; ?></td>
        <td><?php echo $r['u_time']; ?></td>
        <td><?php echo anchor("member/editt/".$r['u_id'],"editt"); ?> </td>
        <td><?php echo anchor("member/del/".$r['u_id'],"del",array("onclick"=>"javascript:return confirm('คุณมั่นใจนะ');")); ?></td>
      </tr>
    <?php } ?>
  </table>
</div>

</body>
</html>