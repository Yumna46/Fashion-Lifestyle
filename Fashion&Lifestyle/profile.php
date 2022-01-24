<?php

session_start();
$showError=false;
$showAlert=false;
if(isset($_POST['update'])){
	include 'dbconnect.php';
	$pass= md5($_POST['updatepassword']);
	$email= $_POST['updateemail'];
	$phone= $_POST['updatephone'];
	$address= $_POST['updateaddress'];
	
	
	if(!empty($_POST['updatepassword'])){
		$currentuser=$_SESSION['username']; 
		
		$sql2="UPDATE `users4668` SET  `password`='$pass',email='$email',phoneno='$phone',address='$address' WHERE username='$currentuser'";
		echo $sql2;
		$gotResults=mysqli_query($conn,$sql2);
		header("location:../Fashion&Lifestyle/viewprofile.php");
		if($gotResults){
			$showAlert=true;
		}
		
		
	}else{
		$showError="password is empty";
	
	}
	
}

?>
<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Profile</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>
 <?php include 'nav.php'; ?>
<?php include 'dbconnect.php'; ?>
	<?php 

										if($showAlert){
										 echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
										  <strong>Success!</strong> Your profile has been updated!
										  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div> ';
										 }	

										 
										 if($showError){
											 echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
											  <strong>Error!</strong>'.$showError.'
											  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											</div> ';
											 }
										
				?>

<h1 class="text-center pt-3" style="font-family: 'Fleur De Leah', cursive; font-weight:200;">Edit Profile</h1>
 
			
				
				 <div class="d-flex align-items-center justify-content-center">
				 
			
				<form action="" method ="POST" enctype="multipart/form-data">
					<?php
						$currentuser=$_SESSION['username'];
						$sql="SELECT * FROM `users4668` WHERE username='$currentuser'";
						$gotResults= mysqli_query($conn,$sql);
						if($gotResults){
							if(mysqli_num_rows($gotResults)>0){
								while($row=mysqli_fetch_assoc($gotResults)){
									//print_r($row['username']);
									?>
													
									<div class="form-group mb-3">
										<label for="username" class="form-label">Username</label>
										<input class="form-control" style="background-color: #decbb4;" type="text" value="<?php echo$row['username']; ?>" aria-label="readonly input example" readonly>
										
									</div>
									<div class="form-group mb-3">
										<label for="password" class="form-label">Password</label>
										<input type="password"name="updatepassword" class="form-control" style="background-color: #decbb4;"  value="">
									    <div id="emailHelp" class="form-text">You must fill the password</div>
									</div>
									<div class="form-group mb-3">
										<label for="text" class="form-label">Email</label>
										<input type="text"name="updateemail" class="form-control" style="background-color: #decbb4;" value="<?php echo$row['email']; ?>">
									</div>
									<div class="form-group mb-3">
										<label for="text" class="form-label">Phone No</label>
										<input type="text"name="updatephone" class="form-control" style="background-color: #decbb4;" value="<?php echo$row['phoneno']; ?>">
									</div>
									<div class="form-group mb-3">
										<label for="text" class="form-label">Address</label>
										<input type="text"name="updateaddress" class="form-control" style="background-color: #decbb4;" value="<?php echo$row['address']; ?>">
									</div>
							
									<div class="form-group mb-3">
										<input type="submit"name="update" class="btn btn-info" value="update">
									</div>
									
									<?php
									
								}
								
							}
						}
					?>
				</div>



<?php include 'footer.php'; ?>
 <script src="js/bootstrap.bundle.min.js"></script>
 </body>
 </html>