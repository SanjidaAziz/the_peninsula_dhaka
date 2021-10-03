<?php


?>


<!doctype html>
<html lang="en">
	<head>
		<?php $page='contact'; include 'includes/head.php'; ?>

	</head>
	<body>
		<header>
			<?php include 'includes/navbar.php'; ?>		
		</header>

		<?php if(isset($_SESSION['msg'])) { ?>
            <div id="message_alert" style="z-index: 2000; position: fixed; top: 0; right: 0; margin-right: 20px; margin-top: 20px;" class="alert alert-danger">
                <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                ?>
            </div>
        <?php } ?>

		<div class="container contact-form">
			<div class="row mx-5 p-sm-0 p-0 justify-content-center ">
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-8 shadow-lg border-0 rounded p-4 mt-2  text-white text-center contact_form_banner">
				<h1>Contact Us</h1>
				</div>
			</div>
			<div class="row  mx-5 fw-bold p-0 justify-content-center">
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-8 bg-light shadow-lg border-0 rounded p-5 pb-1 mb-0">

					<form action="contact_process.php" method="POST" >
						
						<div class=" mb-3">
							<label for="username" class="form-label">Name<span>*</span></label>
							<input id="username" type="text" name="username" value="" class="form-control" placeholder="Enter your name" required>
						</div>
						<div class="mb-3">
							<label for="useremail" class="form-label">Email address<span>*</span></label>
							<input id="useremail"type="email" name="useremail" value="" class="form-control" placeholder="Enter your email address" aria-describedby="emailHelp" required>
						</div>
						<div class=" mb-3">
							<label for="userphone" class="form-label">Phone<span>*</span></label>
							<input id="userphone" type="tel" name="userphone" value="" class="form-control" placeholder="Enter your phpne number" required>
						</div>
						<div class=" mb-3">
							<label for="usermsg" class="form-label">Message<span>*</span></label>
							<textarea id="usermsg" name="usermsg" class="form-control" rows="3" required></textarea>
						</div>
						<div class="row justify-content-end p-0 m-0">							
							<div class="col-1 p-0 m-4">
								<a class="btn btn-link text-right ps-0 " role="button">
							  <button class=" btn btn-outline-dark fw-bold contact_form_btn" href="abt.php">Submit</button></a>
							</div>							
						</div>
						
						<div class=" justify-content-end pb-3">														
							  <a class="btn btn-link  ps-0 " href="index.php" role="button">Back to Home</a>			
						</div>						
					</form>					
				</div>								
			</div>			
		</div>
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