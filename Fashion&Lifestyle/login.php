<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	include 'dbconnect.php';
    $username=$_POST["username"];
	$password=md5($_POST["password"]);
	
	
		$sql="Select * from users4668 where username='$username' AND  password='$password'";
		$result=mysqli_query($conn,$sql);
		$num= mysqli_num_rows($result);
		
		if($num==1){
			while($row = mysqli_fetch_assoc($result)){
			$login=true;
			session_start();
			$_SESSION['loggedin']=true;
			$_SESSION['username']=$username;
			$_SESSION['sno']=$row['sno'];
			header("location: welcome.php");
			}
			
		}
	
	else{
		$showError="Invalid  Credentials";
	}
}

?>

<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>login</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>
 <?php include 'nav.php'; ?>
 <?php
 if($login){
 echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are now logged in.
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
 
  
 
 <h2 class="text-center pb-5 pt-5" style="font-family: 'Fleur De Leah', cursive;">Log In to Aloha</h2>
 <div class="d-flex align-items-center justify-content-center">
 <form action="/Fashion&Lifestyle/login.php" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" style="background-color: #decbb4;" id="username" name="username"aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control " style="background-color: #decbb4;" id="password" name="password">
  </div>
   
  
  <button type="submit" class="btn btn-primary">LOG IN</button>
</form>

 </div>
 </div>
 

<?php include 'footer.php'; ?>
 <script src="js/bootstrap.bundle.min.js"></script>
 </body>
 </html>