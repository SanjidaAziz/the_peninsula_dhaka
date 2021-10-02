<?php

$fileName = "upload/data.csv";

$file_handle = fopen($fileName, 'r');
while (!feof($file_handle)) {
    $data[] = fgetcsv($file_handle, 1024);
}
fclose($file_handle);

if (!empty($_POST)) {
    $new_csv = fopen($fileName, 'a');
    $list = array(
        0 => sizeof($data),
        1 => $_POST['username'],
        2 => $_POST['useremail'],
        3 => $_POST['userphone'],
        4 => $_POST['usermsg']
    );
    fputcsv($new_csv, $list);
    fclose($new_csv);

    $data = NULL;
    $msg = "Data Added Successfully";
    $file_handle = fopen($fileName, 'r');
    while (!feof($file_handle)) {
        $data[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);
}
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

		<div class="container my-5 py-5">
			<div class="row mx-5 p-sm-0 p-0 pt-5 justify-content-center ">
				<div class="col-xs-12 col-sm-8 col-md-8 shadow-lg border-0 rounded p-4  text-white text-center contact_form_banner">
				<h1>Contact Us</h1>
				</div>
			</div>
			<div class="row  mx-5 fw-bold p-0 justify-content-center">
				<div class="col-xs-12 col-sm-8 col-md-8 bg-light shadow-lg border-0 rounded p-5 pb-1 mb-0">

					<form action="" method="POST" >
						
						<div class=" mb-3">
							<label class="form-label">Name<span>*</span></label>
							<input type="text" name="username" value="" class="form-control" placeholder="Enter your name" required>
						</div>
						<div class="mb-3">
							<label class="form-label">Email address<span>*</span></label>
							<input type="email" name="useremail" value="" class="form-control" placeholder="Enter your email address" aria-describedby="emailHelp" required>
						</div>
						<div class=" mb-3">
							<label class="form-label">Phone<span>*</span></label>
							<input type="tel" name="userphone" value="" class="form-control" placeholder="Enter your phpne number" required>
						</div>
						<div class=" mb-3">
							<label class="form-label">Message<span>*</span></label>
							<textarea name="usermsg" class="form-control" rows="3" required></textarea>
						</div>
						<div class="row justify-content-end p-0 m-0">
							
							<div class="col-1 p-0 m-4">
								<a class="btn btn-link text-right ps-0 " role="button">
							  <button class=" btn btn-outline-dark fw-bold contact_form_btn" href="abt.php">Submit</button></a>
							</div>
							
						</div>
						<div class="border-0  p-2 text-center">
							<?php
							if (isset($msg)) {
								echo $msg;
							} 
							?>
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
	</body>
</html>