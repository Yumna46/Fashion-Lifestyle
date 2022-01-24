<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true)
{
	$loggedin=true;
}
else{
	$loggedin=false;
}
 echo '<link href="https://fonts.googleapis.com/css2?family=Fleur+De+Leah&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/all.css">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Aloha</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="Index.php" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="aboutus.php" class="nav-link">ABOUT US</a>
                </li>
				 <li class="nav-item">
                    <a href="teampage.php" class="nav-link">TEAM</a>
                </li>';
				
					if(!$loggedin){
     
             
                echo '<li class="nav-item">
                    <a href="signup.php" class="nav-link">SIGN UP</a>
                </li>';
				}
				
				if($loggedin){
     
			echo	 
	    	'<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>  <a class="dropdown-item" href="viewprofile.php">VIEW PROFILE</a></li>
        <li>  <a class="dropdown-item" href="profile.php">EDIT PROFILE</a></li>
         <li> <a class="dropdown-item" href="logout.php">LOG OUT</a></li>
        </ul>		
      </li>';
				}
                echo '<li class="nav-item">
                    <a href="contactus.php" class="nav-link">CONTACT US</a>
                </li>
				<li class="nav-item">
                    <a href="fashion.php" class="nav-link">ALL BLOGS</a>
                </li>';
						
				
			
          echo '</ul>
        </div>

    </nav>';
	?>