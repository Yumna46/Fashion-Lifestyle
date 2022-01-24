<?php
session_start();
?><!doctype html>
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

<div class="mt-5">
<?php 
require ('dbconnect.php');
$name=$_SESSION['username'];
$sql ="SELECT * FROM users4668 WHERE username='$name'";
$result=mysqli_query($conn,$sql);
if($result){
    while($data = mysqli_fetch_assoc($result)){
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $phoneno = $data['phoneno'];
        $address = $data['address'];
    }
}

?>
<div class="container-fluid justify-content-center">

   <div align="center" class="col-lg-12 col-sm-6">
<div>
    <h1 class="mt-4" style="font-family: 'Fleur De Leah', cursive; font-weight:300;">Your Profile</h1>
</div>

<div class="card pt-3" style="background-color: #decbb4;width: 18rem;">
<div>
<i style='font-size:10vw;' class='fas text-info'>&#xf406;</i>
</div>

    <p>Username: <?php echo $username ?></p>
    <p>Email: <?php echo $email ?></p>
	<?php if($phoneno==''){
		echo  '<p>Phone: </p>';
		}else{
			echo  '<p>Phone: 0'.$phoneno.'</p>';
		}?>
    
    <p>address: <?php echo $address ?></p>
</div>
   </div>
   </div>


</div>

<div class="text-center pb-5 pt-5">
<h6 class="text-center"><b>If you want to edit your profile here</b></h6>

 <a href="profile.php">Edit Profile</a>
</div>
 </div>
<?php include 'footer.php'; ?>
 <script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>