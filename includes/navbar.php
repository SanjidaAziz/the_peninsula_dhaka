	
<nav class="navbar_mystyle navbar navbar-expand-md navbar-dark bg-dark fixed-top">
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
				<li class="nav-item "><a class="nav-link <?php if($page=='login'){echo 'active';} ?>" href="team.php">Login</a></li>
			
			</ul>
		</div>
	</div> 

</nav>	
	
	
