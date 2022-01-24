<?php
session_start();
$showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	
	include 'dbconnect.php';
	$username=$_POST["username"];
	$email=$_POST["email"];
	$phoneno=$_POST["phoneno"];
	$message=$_POST["message"];
	
	$sql="INSERT INTO `users4668`.`contactusinfo` (`username`, `email`,`phoneno` ,`message` ) VALUES ('$username', '$email', '$phoneno','$message')";
	$result=mysqli_query($conn,$sql);
	if($result){
			$showAlert=true;
		}
	
	
}



?>
<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Contact Us</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>
<?php include 'nav.php'; ?>


 <?php
 if($showAlert){
 echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Successfully submitted your feedback.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
 }

 ?>

 <div class="container pb-5">
 <h1 class="text-center pt-3" style="font-family: 'Fleur De Leah', cursive; font-weight:200;">Contact to Team Aloha</h1>
  <div class="d-flex align-items-center justify-content-center">
 <form action="/Fashion&Lifestyle/contactus.php" method="post">
  

    <div class="mb-3">
    <label for="username" class="form-label col-md-2">Username</label>
    <input type="text" class="form-control" style="background-color: #decbb4;" id="username" name="username"aria-describedby="emailHelp">
   
  </div>
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" style="background-color: #decbb4;" id="email" name="email"aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="phoneno" class="form-label">Phone No</label>
    <input type="text" class="form-control"  style="background-color: #decbb4;" id="phoneno" name="phoneno"aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <textarea class="form-control" style="background-color: #decbb4;" id="message" name="message" rows="4" aria-describedby="emailHelp">
   </textarea>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</div>


<?php include 'footer.php'; ?>
 <script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>