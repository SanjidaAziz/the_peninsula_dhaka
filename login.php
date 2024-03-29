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
					<form action="login_process.php" method="POST" class="loginForm">
						<h3 class="mb-3 text-center ">Login</h3>
					  	<div class="mb-3">
					    	<label for="email" class="form-label">Email address</label>
					    	<input id="email" type="email" name="useremail" value="" class="form-control" placeholder="Enter your email address" required>
					  	</div>
					  	<div class="mb-3">
						    <label for="password" class="form-label">Password</label>
						    <input id="password" type="password" name="password" value="" class="form-control" placeholder="Enter your password here" required>
					  	</div>
					  	<button type="submit" class="btn">Submit</button>
					  	<div class="my-3 message">
						    Don't have an account?<a href="register.php" class="fs-5"> Sign up here</a>
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