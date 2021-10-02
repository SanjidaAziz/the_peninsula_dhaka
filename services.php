<!doctype html>
<html lang="en">
	<head>
		<?php $page='services'; include 'includes/head.php'; ?>
	</head>
	<body>
		<header>
			<?php include 'includes/navbar.php'; ?>		
		</header>

		<div class="">
			
			<div>
				<img src="images/booking.jpg" class="img-fluid">
				
				<div class="container-fluid p-0  ">
					<form class="bg-white" >

						<div class="row schedule justify-content-center">
							<div class="col-sm-12 col-md-6 col-lg-4 checkin border border-white rounded-pill">
								<p>Checkin date</p>
								<div class="row">
									<div class="blk-day ">
										<div class="input-group mb-3 ">								
											<select class="form-select-sm" id="day">
											    <option selected></option>
											    <option value="01">1</option>
											    <option value="02">2</option>
											    <option value="03">3</option>
											    <option value="04">4</option>
											    <option value="05">5</option>
											    <option value="06">6</option>
											    <option value="07">7</option>
											    <option value="08">8</option>
											    <option value="09">9</option>
											    <option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
										  	</select>
										  	<label class="input-group-text px-o" for="day">Day</label>				 
										</div>					
									</div>
									<div class="blk-month">
										<div class="input-group mb-3 ">
											<select class="form-select-sm" id="day">
											    <option selected></option>
											    <option value="01">January</option>
											    <option value="02">February</option>
											    <option value="03">March</option>
											    <option value="04">April</option>
											    <option value="05">May</option>
											    <option value="06">June</option>
											    <option value="07">July</option>
											    <option value="08">August</option>
											    <option value="09">September</option>
											    <option value="10">October</option>
											    <option value="11">November</option>								
												<option value="12">December</option>								
											  </select>
											  <label class="input-group-text" for="day">Month</label>
										</div>	
									</div>
									<div class="blk-year">
										<div class="input-group mb-3 ">
											<select class="form-select-sm" id="year">
											    <option value="01" selected>2021</option>
											    
											    <option value="02">2022</option>
											    								
											  </select>
											<label class="input-group-text " for="day">Year</label>
										</div>	
									</div>
								</div>
								
							</div>
							<div class="col-sm-12 col-md-6 col-lg-4 checkout border border-white rounded-pill">
								<p>Checkout date</p>
								<div class="row">
									<div class="blk-day ">
										<div class="input-group mb-3 ">								
										<select class="form-select-sm" id="day">
										    <option selected></option>
										    <option value="01">1</option>
										    <option value="02">2</option>
										    <option value="03">3</option>
										    <option value="04">4</option>
										    <option value="05">5</option>
										    <option value="06">6</option>
										    <option value="07">7</option>
										    <option value="08">8</option>
										    <option value="09">9</option>
										    <option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
									  	</select>
									  	<label class="input-group-text px-o" for="day">Day</label>
									  
									</div>					
									</div>
									<div class="blk-month">
										<div class="input-group mb-3 ">
											<select class="form-select-sm" id="day">
											    <option selected></option>
											    <option value="01">January</option>
											    <option value="02">February</option>
											    <option value="03">March</option>
											    <option value="04">April</option>
											    <option value="05">May</option>
											    <option value="06">June</option>
											    <option value="07">July</option>
											    <option value="08">August</option>
											    <option value="09">September</option>
											    <option value="10">October</option>
											    <option value="11">November</option>								
												<option value="12">December</option>								
											  </select>
											  <label class="input-group-text" for="day">Month</label>
										</div>	
									</div>
									<div class="blk-year">
										<div class="input-group mb-3 ">
											<select class="form-select-sm" id="year">
											    <option value="2021" selected>2021</option>
											    
											    <option value="2022">2022</option>
											    								
											  </select>
											<label class="input-group-text " for="day">Year</label>
										</div>	
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3 type border border-white rounded-pill">
								
								<p>Select Room type</p>
								<div class="row">
									<div class="blk-type ">
										<div class="input-group mb-3 ">
											<select class="form-select-sm" id="type">
											    <option selected>Room/Suit Type</option>
											    <option value="1">Delux</option>
											    <option value="2">Super Delux</option>
											    <option value="3">Executive Twin</option>
											    <option value="4">Suit</option>
											   								
											  </select>
											<label class="input-group-text " for="day">Type</label>
										</div>
									</div>
									<div class="blk-book " >
										<button type="submit" class="btn btn-book ">Book now</button>
									</div>	
								</div>
								
							</div>							
						</div>
						
					</form>
				</div>
				

					



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