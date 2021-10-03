<!doctype html>
<html lang="en">
	<head>
		<?php $page='about'; include 'includes/head.php'; ?>

	</head>
	<body>
		<header>
			<?php include 'includes/navbar.php'; ?>		
		</header>

		<div class="container about-section">
			<h1 class="text-center pb-4">ABOUT US</h1>
			<div class="row">
				<?php
				require_once ('db/connection.php');
				$query = "SELECT * FROM about where section like('about_us_info')";
				$result = mysqli_query($link, $query);
				$no_of_rows= mysqli_num_rows($result);
				if($no_of_rows){
					while($section= mysqli_fetch_assoc($result)){
						?>
				<div class="col-sm-12 col-md-6 col-lg-6 about-background" 
					 style="background-image: url('images/<?php echo $section['about_photo']; ?>');">							
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6">							
					<div class="about-text">
						<h3>A small details about us</h3>
						<p><?php echo $section['description']; ?> </p>	
					</div>
				</div>

				<?php
					}
				}
				?>
			</div>
		</div>

		<div class="container about-section about-section">
			<h1 class="text-center pb-4">Our management team</h1>
			<div class="row">
				<?php
				$query = "SELECT * FROM about where section like('management_info')";
				$result = mysqli_query($link, $query);
				$no_of_rows= mysqli_num_rows($result);
				if($no_of_rows){
					while($section= mysqli_fetch_assoc($result)){
						?>
					<div class="col-sm-12 col-md-6 col-lg-6">
					
					<div class="about-text">
						<h3>A small details about our management team</h3>
						<p><?php echo $section['description']; ?> </p>								
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 about-background" 
					 style="background-image: url('images/<?php echo $section['about_photo']; ?>');">							
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>

		<div class="container about-section">
			<h1 class="text-center pb-4">Developer Info</h1>
			<div class="row">
				<?php
				$query = "SELECT * FROM about where section like('developer_info')";
				$result = mysqli_query($link, $query);
				$no_of_rows= mysqli_num_rows($result);
				if($no_of_rows){
					while($section= mysqli_fetch_assoc($result)){
						?>
				<div class="col-sm-12 col-md-6 col-lg-6 about-background" 
					 style="background-image: url('images/<?php echo $section['about_photo']; ?>');">							
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6">							
					<div class="about-text">
						<h3>About developer of this site</h3>
						<p><?php echo $section['description']; ?> </p>

						<ul class="social_med justify-content-start">
							<li><a href="https://www.facebook.com/sanjidaaziz58/" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
							<li><a href="https://github.com/SanjidaAziz" target="_blank"><i class="fa fa-github"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCkauFVrdAt0du8QOvxZ3SuA"  target="_blank"><i class="fa fa-youtube"></i></a></li>
						</ul>	
					</div>
				</div>

				<?php
					}
				}
				?>
			</div>
		</div>

		<div class="container">
			<div class="row justify-content-center mb-5">

			<?php
				$query = "SELECT * FROM about where section like('%link')";
				$result = mysqli_query($link, $query);
				$no_of_rows= mysqli_num_rows($result);
				if($no_of_rows){
					while($section= mysqli_fetch_assoc($result)){
						?>
				<div class="col-sm-12 col-md-12 col-lg-6 p-5">
					<div class="ratio ratio-16x9">
							<?php echo $section['link/embed']; ?>
					</div>					
				</div>
				<?php
					}
				}
				?>		
			</div>			
		</div>

		<footer>
			<?php include 'includes/footer.php'; ?>	
		</footer>
		<!-- scripts -->
		<?php include 'includes/scripts.php'; ?>  
	</body>
</html>