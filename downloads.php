<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style2.css">
  <title>Download files</title>
</head>
<body style="background-image: url('img.jpg');">
<div class="topnav">
	<a class="active" href="upload.php" style="color:white;font-size:20px;">Upload</a>
	<a class="active" href="downloads.php" style="color:white;font-size:20px;">Download</a>
  <a class="active" href="login.php?logout='1'" style="position:absolute;right:40px;color:white;font-size:20px;">Logout</a>
</div>
<table>
<thead>
   
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <!--td><?php echo $file['downloads']; ?></td-->
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>" style="color:black;font-size:20px;font-weight:bold;">Download</a></td>
	  
	</tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>