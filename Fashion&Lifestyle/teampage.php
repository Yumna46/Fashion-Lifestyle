<?php
session_start();
?><!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css2?family=Fleur+De+Leah&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
<title>Our Team</title>
</head>
<body>
 <?php include 'nav.php'; ?>
 <?php 
include 'dbconnect.php';
?>


<link href="teamstyle.css" rel="stylesheet">
<section class="team  mx-auto">
<div class="container-fluid justify-content-center">
<h1>Our Team</h1>
            <div align="center" class="col-md-12 mt-3">
	
<?php 
	$sql="SELECT * FROM `users4668`.`team`";
	$result=mysqli_query($conn,$sql);
	
	while($row =mysqli_fetch_assoc($result))
	{
		$img=$row['team_img'];
		$title=$row['team_title'];
		$desc=$row['team_desc'];
		echo	'<div class="row">
			<div class="profile text-center">
			<div class="img-box">
			<img src="'.$img.'" class="img-responsive">

			</div>
			<h2>'.$title.'</h2>
			<p>'.$desc.'</p>
			</div>
			</div>';
	}
?>


			</div>
			



</div>
</section>
<?php include 'footer.php'; ?>
 <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>