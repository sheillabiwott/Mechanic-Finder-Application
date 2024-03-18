<?php
include('../database.php');
$msg= null;
if(isset($_POST['register'])){
		if(!empty($_POST['name']) && !empty($_POST['mobile'])&&!empty($_POST['city']) && !empty($_POST['password'])&& !empty($_POST['confirmpassword'])){
			$name = $_POST['name'];
			
			$adress = $_POST['address'];
			$contact = $_POST['mobile'];
			$city = $_POST['city'];
			$area = $_POST['area'];
			$email = $_POST['email'];
			$experience = $_POST['experience'];
			$hourlyrate = $_POST['rate'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirmpassword'];

			if($password===$confirm_password)
			{
				
				$query="INSERT INTO  professional VALUES ('$name','$adress ','$city','$area','$contact','$email','$experience','$hourlyrate','$password')";
				$results=mysqli_query($connection,$query);
					if($results){
						$msg="Mechanic registered successfully!";
					}
			}

		}else{$msg = "Fill all input fields";}
}
if(isset($msg))
{
	echo("<script>alert('".$msg."');window.location.replace('manageprofessional.php');</script>");
}
require('adminheader.php');
?>
<script>
	function loadarea(){
		var disttrict=$('#distt').val();
			$.ajax({
			   type: "POST",
			   url: "../selectarea_ajax.php",
			   data: {
						'distt' : disttrict
				},
			   success: function(data) {
			        console.log(data);
					$('#area').append(data);
				}
		});
	}
	</script>
		<div class="registrationbox">
			<div class="registrationdivision">
					<form method="post" action="" enctype="multipart/form-data">
				<h2>Mechanic Registration Page</h2>
					<div class="registrationfirstdivision">
						<input type="text" id="" name="name" placeholder="Enter Name" required>
					</div>

					<div class="registrationfirstdivision">
						<input type="text" id="" name="address" placeholder="Address" required>
					</div>

					<div class="registrationfirstdivision">
						<select id="distt" name="city" onchange="loadarea()" required>
						  <option selected disabled>Select City</option>
						   <?php

							$query="SELECT * FROM cities ";
							$results=mysqli_query($connection,$query);
								if($results){
									if(mysqli_num_rows($results)>0){
									while($row = mysqli_fetch_object($results))
									{
										$cityid = $row->city_id;
										$cityname = $row->city_name;

							?>
						  <option value="<?php echo $cityid; ?>"><?php echo $cityname; ?></option>
						  <?php }}} ?>
						</select>
					</div>
					<div class="registrationfirstdivision">
						<select id="area" name="area" required>
							<option selected disabled>Select Area</option>
						</select>
					</div>
					<div class="registrationfirstdivision">
						<input type="text" id="" name="mobile" placeholder="Mobile" required>
					</div>
					<div class="registrationfirstdivision">
						<input type="text" id="" name="email" placeholder="Email" required>
					</div>

					<div class="registrationfirstdivision">
						<input type="text" id="" name="experience" placeholder="Experience" required>
					</div>
					<div class="registrationfirstdivision">
						<input type="text" id="" name="rate" placeholder="Per Hour Rate" required>
					</div>
					<div class="registrationfirstdivision">
						<input type="password" id="" name="password" placeholder="Password">
					</div>
					<div class="registrationfirstdivision">
						<input type="password" id="" name="confirmpassword" placeholder="Confirm Password">
					</div>

					<input type="submit" value="Sign Up" name="register" id="loginbutton">

					</form>
				</div>

			</div>
		</div>
		<?php
include('footer.php');
?>