<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Upload file</title>
  </head>
  <body style="background-image: url('img.jpg');">
    <div class="container">
	<div class="topnav">
	<a class="active" href="upload.php" style="color:white;font-size:20px;">Upload</a>
	<a class="active" href="downloads.php" style="color:white;font-size:20px;">Download</a>
 <a class="active" href="index.php?logout='1'" style="position:absolute;right:40px;color:white;font-size:20px;">Logout</a>
	</div>
     <div class="row">
	  
        <form action="upload.php" method="post" enctype="multipart/form-data" >
          <h3 style="color:black;font-size:35px;font-weight: bold;">Upload File</h3>
          <input type="file" name="myfile" style="border:2px dotted black;"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>