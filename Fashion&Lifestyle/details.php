<?php
session_start();
include 'dbconnect.php';
$showAlert;
$showAlert=false;
	$method=$_SERVER['REQUEST_METHOD'];
	if(isset($_POST["commentbtn"])){
		
		if(isset($_SESSION['username'])){
			$comment=$_POST['comment'];
		$sql="INSERT INTO `comments` (`id`, `comment_by`, `content`, `c_time`) 
		VALUES ('".$_GET["itemId"]."', '".$_SESSION['username']."', '".$comment."', current_timestamp());";
		$result=mysqli_query($conn,$sql);
		$showAlert=true;							
		}else{
			header("location: ../Fashion&Lifestyle/login.php");
		}
						
	}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Details Page</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
	
</head>

<body>
  <?php include 'nav.php'; 
  if(isset($_GET["itemId"])){
	  $itemid= $_GET["itemId"];
 $sql = "SELECT * FROM `users4668`.`allproducts` WHERE id=".$itemid;
      $result = mysqli_query($conn, $sql); 
	  $row = mysqli_fetch_assoc($result);
  }else{
	  header("location:../Fashion&Lifestyle/fashion.php");
  }
  
	 
  ?>
 <?php
	if($showAlert){
							echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Success!</strong> Your comment has been added!
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div> ';
	}
	
  ?> 
  
  <div class="container mx-auto text-center ">
	<h2 class="mb-5 mt-3"><?php echo strtoupper($row["category"])?></h2>
	<div class="row justify-content-center">
	
	
			<div class="col-md-10">
	<div class="card mb-5 " style="max-width: 1100px;background-color: #decbb4;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $row['img'] ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['title']?></h5>
        <p class="card-text"><?php echo $row['description'] ?></p>
        <p class="card-text"><small class="text-muted"><?php echo $row['created'] ?></</small></p>
      </div>
    </div>
  </div>
</div>
	</div>
	</div>
</div>
<!--comment section--->
<div class="container-fluid pb-5 pt-3 mx-auto text-center justify-content-center">

   <div align="center" class="col-lg-12 col-sm-6">
	<h3 class=" py-2" style="font-family: 'Fleur De Leah', cursive; font-weight:200;">Comments</h3>
	<form action="" method="post">
		<div class="form-group mb-3 pb-3">
			<label for="exampleFormControlTextArea1" class="pb-3">Type your comment</label>
			
			<textarea class="form-control" style="background-color: #decbb4;"  id="comment" name="comment" rows="3" required></textarea>
				
		
		</div>
		<input type="submit" name="commentbtn" value="Post Comment" class="btn btn-success">
	</form>	
</div>


</div>
<div class="pb-3 pt-3 px-5"><h4 style="font-family: 'Fleur De Leah', cursive; font-weight:200;">Show all comments   :</h4>
</div>
  <?php 
 include 'dbconnect.php';
 $item= $_GET["itemId"];
 $sql = "SELECT * FROM `users4668`.`comments` WHERE id=$itemid";
 
      $result = mysqli_query($conn, $sql); 
	  $noresult=true;
	
	  while($row = mysqli_fetch_assoc($result)){
		 
		        $noresult=false;
				$content=$row['content']; 
				$content_time=$row['c_time'];
				$content_user=$row['comment_by'];		  
	
		  $sql2 = "SELECT `username` FROM `users4668` WHERE username='$content_user'";
		  $result2 = mysqli_query($conn,$sql2); 
		  $row2 = mysqli_fetch_assoc($result2);
			
		echo "<div class='container pb-5'>
		<div class='d-flex align-items-center'>
		
  <div class='flex-shrink-0'>
    <img src='css/images/user.png' width='25px' class='me-3' alt='...'>
  </div>
  <div class='flex-grow-1 ms-3'> 
  <p class='font-weight-bold my-0'>".$content_user." at ".$content_time."</p>
  ".$content."
  </div>
</div>
</div>";
		   
	  }
	  if($noresult)
	  {
		  echo "<div class='px-5 pb-5'>
		  <h3>no comments yet</h3>
		  </div>";
	  }
	  

?>




  <?php include 'footer.php'; ?>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>


</html>