<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true)
{
	
	header("location:login.php");
	exit;
}
?>
<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <link rel="stylesheet" href="css/bootstrap.min.css">
<title>Welcome -<?php  $_SESSION['username']?></title>
</head>
<body>
<?php include 'nav.php'; ?>


<div class="container text-center my-3">
	<div class="alert alert-success" role="alert">
  <h4 class="alert-heading text-center">Welcome -<?php echo $_SESSION['username']?></h4>
  <p>Hey how are you doing ? Welcome to Aloha.You are now logged in as <?php echo $_SESSION['username']?> </p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to logout <a href="logout.php">using this link</a></p>
  <p class="mb-0">Whenever you need to, be sure to go to home <a href="Index.php">using this link</a></p>
  <p class="mb-0">Whenever you need to, be sure to View profile <a href="viewprofile.php">using this link</a></p>
</div>
	</div>



<?php include 'footer.php'; ?>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>


</html>