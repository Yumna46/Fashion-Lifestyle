<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	include 'dbconnect.php';
    $username=$_POST["username"];
	$password=md5($_POST["password"]);
	
	$cpassword=md5($_POST["cpassword"]);
	
	$existSql="SELECT * FROM `users4668` WHERE username='$username'";
	$result=mysqli_query($conn, $existSql);
	$numExistRows =mysqli_num_rows($result);
	if($numExistRows >0)
	{
		$showError="username already exists";
		
	}
	else{
		
	
	if(($password==$cpassword)){
		$sql="INSERT INTO `users4668` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
		$result=mysqli_query($conn,$sql);
		if($result){
			$showAlert=true;
		}
	}
	else{
		$showError="Passwords do not match";
	}
	}
}

?>

<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>signup</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>
 <?php include 'nav.php'; ?>
 <?php
 if($showAlert){
 echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account has been created and you can log in now.
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
 <div class="container pb-5">
 
 
 <h2 class="text-center pt-5" style="font-family: 'Fleur De Leah', cursive; font-weight:200;">Sign Up To Aloha</h2>
  <div class="d-flex align-items-center justify-content-center">
 <form action="/Fashion&Lifestyle/signup.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" style="background-color: #decbb4;" id="username" name="username"aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" style="background-color: #decbb4;" id="password" name="password">
  </div>
   <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" style="background-color: #decbb4;" id="cpassword" name="cpassword">
	 <div id="emailHelp" class="form-text">Make sure you type the same password</div>
  </div>
  
   <button type="submit" class="btn btn-primary">Sign Up</button>
</form>


</div>

 </div>
<div class="text-center pb-5">
<h6 class="text-center">Already have an account?you can log in here</h6>

<a href="login.php">Log In</a>
</div>

 
 
 
<?php include 'footer.php'; ?>
 <script src="js/bootstrap.bundle.min.js"></script>
 </body>
 </html>