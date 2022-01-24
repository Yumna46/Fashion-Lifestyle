<?php
session_start();
?><html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css2?family=Fleur+De+Leah&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
<title>About Us</title>
</head>
<body>
<?php include 'nav.php'; ?>
 <?php 
include 'dbconnect.php';
?>
<link href="about.css" rel="stylesheet">
 
<section id="about" class="aboutsection" style="background:#BD9A7A;">
	<div class="container">
		<div class="row">
			<div class="col-sm-13">
				<div class="section_title text-center pb-3"><br>
					<h2><u>About Aloha</u></h2>
					
					
					
				
			</div>
	<?php 
	$sql="SELECT * FROM `users4668`.`aboutus`";
	$result=mysqli_query($conn,$sql);
	$row =mysqli_fetch_assoc($result);
	$ab1=$row['about1'];
	$ab2=$row['about2'];
	$ab3=$row['about3'];
	$ab4=$row['about4'];
	$ab5=$row['about5'];
		
			echo '<div class="about-item text-center" style="font-size:18px;">
				<p><b>'.$ab1.'
		
				</b></p>
				<p><b>'.$ab2.'</b></p>
				<p><b>
				'.$ab3.'
				</b></p>
				
				<div class="section_title text-center pb-3" style="font-size:40px;"><br>
					
					<p>'.$ab4.'</p>
			    </div>
				<p><b>
				'.$ab5.'

     </b>
	</p>			
		</div>';
		?>
	</div>
	
	</div>
	</div>
</section>
<?php include 'footer.php'; ?>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>


</html>