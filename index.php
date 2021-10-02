<!doctype html>
<html lang="en">
	<head>
		<?php $page='home'; include 'includes/head.php'; ?>
	</head>
	<body>
		<header>
			<?php include 'includes/navbar.php'; ?>		
		</header>

        <?php if(isset($_SESSION['msg'])) { ?>
            <div id="message_alert" style="z-index: 2000; position: fixed; top: 0; right: 0; margin-right: 20px; margin-top: 20px;" class="alert alert-success">
                <?php
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                 ?>
            </div>
        <?php } ?>
		<main>
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			  	<div class="carousel-indicators">
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
			  	</div>
			  	<div class="carousel-inner">
				    <div class="carousel-item active">

				      	<img src="images/pool.jpg" class="d-block w-100" alt="...">
				      	<div class="carousel-caption home_text">
								<h1>Welcome to The Peninsula Hotel</h1>
								<p>We serve the best in town.<br> Have our best quality services in affordable price</p>
								<a class="btn btn-outline-light btn-lg " href="services.php" type="button">Get Sevices</a>
						</div>
				     	<div class="carousel-caption d-none d-md-block">
				        	<h5>Luxurious swimming pool</h5>
				        	<p>Have a relaxing time here.</p>
				      	</div>
				    </div>
				    <div class="carousel-item">
					    <img src="images/lobby.jpg" class="d-block w-100" alt="...">
					    <div class="carousel-caption home_text">
								<h1>Welcome to The Peninsula Hotel</h1>
								<p>We serve the best in town.<br> Have our best quality services in affordable price</p>
								<a class="btn btn-outline-light btn-lg" href="services.php" type="button">Get Sevices</a>
						</div>

					    <div class="carousel-caption d-none d-md-block">
					       	<h5>Our Lobby</h5>
					    	<p>We are here 24/7 for your service</p>
					    </div>
				    </div>
				    <div class="carousel-item">
				      	<img src="images/dine.jpg" class="d-block w-100" alt="...">
				      	<div class="carousel-caption home_text ">
								<h1>Welcome to The Peninsula Hotel</h1>
								<p>We serve the best in town.<br> Have our best quality services in affordable price</p>
								<a class="btn btn-outline-light btn-lg" href="services.php" type="button">Get Sevices</a>
						</div>
				      	<div class="carousel-caption d-none d-md-block">
					        <h5>Best quality food</h5>
					        <p>Enjoy your meal with delecious food</p>
				     	</div>
			    	</div>
				    <div class="carousel-item">
				      <img src="images/room.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption home_text ">
								<h1>Welcome to The Peninsula Hotel</h1>
								<p>We serve the best in town.<br> Have our best quality services in affordable price</p>
								<a class="btn btn-outline-light btn-lg" href="services.php" type="button">Get Sevices</a>
						</div>
				      <div class="carousel-caption d-none d-md-block">
				        <h5>Comfortable Room</h5>
				        <p>Stay in our hotel with best comfort</p>
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
			</div>



		</main>
		
		<footer>
			<?php include 'includes/footer.php'; ?>	
		</footer>


		<!-- scripts -->
		<?php include 'includes/scripts.php'; ?>
        <script>
            $(document).ready(function() {
                $('#message_alert').fadeOut(8000);
            });
        </script>
	</body>
</html>