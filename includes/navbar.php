	
<nav class="navbar_mystyle navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container p-0 ">
		<a class="nav_logo navbar-brand p-0 m-0" href="index.php">
			<div class="row">
				<div class="col-3 p-0">
					<img src="images/logo.png" alt="login inage">
				</div>
				<div class="col-9 pt-1">
					<span><span class="fs-4 fw-bold">The Peninsula</span> <br><span class=" fw-light">Dhaka</span></span>
				</div>
			</div>
			
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
		<div class="collapse navbar-collapse" id="navbarToggleExternalContent">
			<ul class="navbar-nav ms-auto nav_lists">
				<li class="nav-item "><a class="nav-link <?php if($page=='home'){echo 'active';} ?> " href="index.php">Home</a></li>
				<li class="nav-item "><a class="nav-link <?php if($page=='services'){echo 'active';} ?>" href="services.php">Services</a></li>
				<li class="nav-item "><a class="nav-link <?php if($page=='about'){echo 'active';} ?>" href="about.php">About</a></li>
				<li class="nav-item "><a class="nav-link <?php if($page=='contact'){echo 'active';} ?>" href="contact.php">Contact</a></li>
				<li class="nav-item "><a class="nav-link <?php if($page=='team'){echo 'active';} ?>" href="team.php">Team</a></li>

                <?php
                    require('functions.php');
                    if(is_logged_in()) {
                ?>

				<li class="nav-item "><a class="nav-link <?php if($page=='login'){echo 'active';} ?>" href="logout.php">Logout</a></li>
				<li class="nav-item pt-1">
					<a class="nav-link rounded-circle profile_image py-0 <?php if($page=='profile'){echo 'active';} ?>" href="profile.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
						<i class="fa fa-user-circle fa-2x"></i>
					</a>
				</li>
                <?php } else { ?>
				<li class="nav-item "><a class="nav-link <?php if($page=='login'){echo 'active';} ?>" href="login.php">Login</a></li>
                <?php } ?>

			</ul>
		</div>
	</div> 

</nav>	
	
	
