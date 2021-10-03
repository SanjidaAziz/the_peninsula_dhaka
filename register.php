
<!doctype html>
<html lang="en">
	<head>
		<?php $page='login'; include 'includes/head.php'; ?>
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
		
		<div class="container-fluid login_backgound_img p-0">
			<div class="row justify-content-center">

				<div class="col-sm-8 col-md-6 col-lg-4  login_form ">
					
					<form action="register_process.php" method="POST" class="registerForm">
						<h3 class="mb-3 text-center ">Register</h3>
						<div class="mb-3">
					    	<label for="name" class="form-label">User name</label>
					    	<input id="name" type="text" name="username" value="" class="form-control" placeholder="Enter your name" required>
					    	
					  	</div>
					  	<div class="mb-3">
					    	<label for="email" class="form-label">Email address</label>
					    	<input id="email" type="email" name="useremail" value="" class="form-control" placeholder="Enter your email address" required>
					    	
					  	</div>
					  	<div class="mb-3">
					    	<label for="userphone" class="form-label">Phone number</label>
					    	<input id="userphone" type="tel" name="userphone" value="" class="form-control" placeholder="Enter phpne number" required>
					    	
					  	</div>
					  	<div class="mb-3">
						    <label for="password" class="form-label">Password</label>
						    <input id="password" type="password" name="password" value="" class="form-control" placeholder="Enter password here" required>
					  	</div>

					  	<button type="submit" class="btn">Submit</button>
					  	<div class="my-3 message">
						    Already have an account?<a href="login.php" class="fs-5"> Login</a>
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
                $('#message_alert').fadeOut(6000);
            });
        </script>

		

	</body>
</html>