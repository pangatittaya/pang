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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="member/main_view"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
</head>
<body>

<div class="container">
 
  <h2>ตารางจองห้องประชุม</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>วันที่</th>
        <th>เวลา</th>
        <th>ชื่อห้อง</th>
        <th>ราคา</th>
        <th>จองห้องประชุม</th>    
      </tr>
    </thead>
    <?php foreach ($rs as $r){ ?>
    <tbody>
      <tr>
        <td><?php echo $r['r_date']; ?></td>
        <td><?php echo $r['r_time']; ?></td>
        <td><?php echo $r['r_room']; ?></td>
        <td><?php echo $r['r_price']; ?></td>
        <td><?php echo anchor("member/addform/".$r['u_id'],"จอง"); ?></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
 
</div>

</body>
</html>