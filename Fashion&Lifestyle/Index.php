<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css2?family=Fleur+De+Leah&display=swap" rel="stylesheet">
    <title>Fashion and Lifestyle</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
	
</head>

<body>
    <?php include 'nav.php'; ?>
<?php 
    include 'dbconnect.php';
?>
    <!-- Slider Section  -->
<?php 
	$sql="SELECT * FROM `users4668`.`slider`";
	$result=mysqli_query($conn,$sql);
	$row =mysqli_fetch_assoc($result);
	$image1=$row['img1'];
	$bonjour=$row['desc1'];
	$image2=$row['img2'];
	$image3=$row['img3'];
	
	
   echo '<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="'.$image1.'" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block pb-1">
        
        <p><b>'.$bonjour.'</b></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="'.$image2.'" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="color:	#654321;">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="'.$image3.'" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>';
?>

<!----About----->
<?php 
	$sql="SELECT * FROM `users4668`.`heading`";
	$result=mysqli_query($conn,$sql);
	$row =mysqli_fetch_assoc($result);
	$a1=$row['heading1'];
	$a2=$row['heading2'];
	
echo'<section id="about">
	<div class="container py-2">
		<div class="row py-2 my-5">
			<div class="about-text text-center py-5 col-md-10 col-sm-12 mx-auto">
			
			<h3 class="pb-3">'.$a1.'</h3>
			<h1>'.$a2.'</h1>
			
			
			
		</div>
	</div>
</div>
	
</section>';
?>
<!-----Fashion---->
<section class="about">
	<div class="container py-5">
		<div class="row py-5">
			<div class="col-lg-8 m-auto text-center">
				<h1>Welcome to our world of fashion</h1>
				
				
			</div>
			<div class="row">
				<div class="col-lg-4">
					<img src="css/images/fashion_3.jpg" class="img-fluid mb-3" alt="">
					<h5>Chic Look With a Black And White Outfit!</h5>
					<p> 
					This look is easily wearable to attend any formal events, 
				    a brunch date or if you have an important meeting to attend, simply layer on a blazer!</p>
				</div>
				<div class="col-lg-4">
					<img src="css/images/fashion_6.jpg" class="img-fluid mb-3" alt="">
					<h5>How To Style Yourself As a Wedding Guest!</h5>
					<p>You can never go wrong with sarees.
					They can always make you look elegant. 
					As a wedding guest, sarees are the best option.</p>
				</div>
				<div class="col-lg-4">
					<img src="css/images/fashion2.jpg" class="img-fluid mb-3" alt="">
					<h5>How To Style a Blazer For Your Office Look</h5>
					<p> We always like to find white dresses that offer an interesting detail or go for a plain sleek silhouette. Oh and did We mention there are endless ways to style this little number?         For a polished/classy look,
					pair a mini LWD with neutral fabrics like an oversized  blazer, as seen here.</p>
				</div>
			</div>
		</div>
				<div class="row pt-3">
					<div class="col-lg-6 text-center m-auto">
						<a href="fashion.php?productType=fashion"><button class="btn1">See more</button></a>
					</div>
					
				</div>
	</div>
</section>
<!----Lifestyle----->
<section class="Lifestyle">
<div class="container py-5">
        <div class="row py-5">
             <div class="col-lg-5 m-auto text-center">
			 <h1>LifeStyle Inspiration</h1>
			
             </div>
        </div>
		<div class="row">
             <div class="col-lg-3 text-center">
			      <div class="card border-0 bg-light mb-2">
				    <div class="card-body">
					<img src="css/images/lifestyle3.jpg" class="img-fluid" alt="">
					</div>
				  </div>
				  <h6>The Perfect Travel Essentials!</h6>
				  <p>Most people aren’t born savvy travelers.The following tips for
				  traveling will have you saving money, sleeping better, 
				  getting off the beaten path more, meeting locals, 
				  and just being a better traveler</p>
             </div>
			 <div class="col-lg-3 text-center">
			      <div class="card border-0 bg-light mb-2">
				    <div class="card-body">
					<img src="css/images/lifestyle10.jpg" class="img-fluid" alt="">
					</div>
				  </div>
				  <h6>Get Some Morning Routine Ideas!</h6>
				  <p>Tired of being tired? Of feeling like you’re wasting your morning and, 
				  in turn, wasting your day? 
				  You need to revamp your morning routine!</p>
             </div>
			 <div class="col-lg-3 text-center">
			      <div class="card border-0 bg-light mb-2">
				    <div class="card-body">
					<img src="css/images/lifestyle4.jpg" class="img-fluid" alt="">
					</div>
				  </div>
				  <h6>Fitness Tips And Routine</h6>
				  <p>Exercise Daily.Read more to get more fitness tips </p>
             </div>
			 <div class="col-lg-3 text-center">
			      <div class="card border-0 bg-light mb-2">
				    <div class="card-body">
					<img src="css/images/lifestyle2.jpg" class="img-fluid" alt="">
					</div>
				  </div>
				  <h6>Healthy Diet Plan You Wish To Follow</h6>
				  <p>An eating plan that helps manage your weight includes a variety 
				  of healthy foods.
				  Add an array of colors to your plate and think of it as eating the rainbow.</p>
             </div>
		</div>	 
		<div class="row">
		  <div class="col-lg-6 text-center m-auto">
		  <a href="fashion.php?productType=lifestyle"><button class="btn1">Get some more Ideas</button></a>
		  </div>
		</div>
</div>
</section>	
  <?php include 'footer.php'; ?>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>