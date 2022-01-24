<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>All Blogs</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="demo.css">
</head>

<body>
<!--Filtering--->
  <?php include 'nav.php'; 
  include 'dbconnect.php';
  ?>
  <div class="container mx-auto text-center">
  <?php
	if(isset($_GET["productType"])){
		$sql = "SELECT * FROM `users4668`.`allproducts` where category='".$_GET["productType"]."'";
		$t=$_GET["productType"];
	}else{
		$sql = "SELECT * FROM `users4668`.`allproducts`";
		$t="Enjoy All Our Blogs Here";
	}
      $result = mysqli_query($conn, $sql);
	  ?>
    <h2 class="mb-5 mt-3"><?php echo strtoupper($t)?></h2>
    <div class="row justify-content-center">
      
	  <?php
      while ($row = mysqli_fetch_assoc($result)) {
        $cat = $row['title'];
        $desc=$row['alldesc'];
        $img = $row['img'];
		
      
      ?>
        <div class="col-md-4 my-2">
          <div class="card h-100" >
		    <?php echo '<a href="details.php?itemId='.$row['id'].'">'?>
            <img src="<?php echo $img ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $cat ?></h5>
              <p class="card-text"><?php echo $desc ?></p>
              </a>
            </div>
          </div>
        </div>

      <?php
      }
      ?>
    </div>
  </div>

  <?php include 'footer.php'; ?>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>


</html>