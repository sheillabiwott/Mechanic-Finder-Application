<?php
include('database.php');
$msg= null;
if(isset($_POST['register'])){
		if(!empty($_POST['name']) && !empty($_POST['mobile'])&&!empty($_POST['city']) && !empty($_POST['password'])&& !empty($_POST['confirmpassword'])){
			$name = $_POST['name'];
			
			$adress = $_POST['address'];
			$contact = $_POST['mobile'];
			$city = $_POST['city'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirmpassword'];
			if($password===$confirm_password)
			{
				$query="INSERT INTO  user VALUES ('','$name','$adress ','$city','$contact','$email','$password')";
				$results=mysqli_query($connection,$query);
					if($results){

						$msg="User Registration Successfull";
						echo("<script>alert('".$msg."');window.location.href = 'login.php';</script>");
					}
			}

		}else{$msg = "Fill all input fields";}
}
if(isset($msg))
{
	echo("<script>alert('".$msg."');</script>");
}
?>


<html>
<head>
<title>E-Mechanic Solutions</title>
<link rel="stylesheet" href="style22.css">
</head>
<body>
	<div class="container">
	<div class="wrapper">
		<div class="mynavbar" >
					<div class="logo" id="mylogo">
						<a href="index.php"><h3>E-Mechanic Solutions</h3></a>
					</div>
					<div class="navcombo" id="mynavcombo">
						<div class="headernav" >
							<a href="index.php" >Home</a>
						</div>
					</div>
		</div>

		<div class="registrationbox">
			<div class="registrationdivision">
					<form method="post" action="">
				<h2>User Registration Page</h2>
					<div class="registrationfirstdivision">
						<input type="text" id="" name="name" placeholder="Enter Name" required>
					</div>
				
					<div class="registrationfirstdivision">
						<input type="text" id="" name="address" placeholder="Address" required>
					</div>
					<div class="registrationfirstdivision">
						<input type="text" id="" name="city" placeholder="City" required>
					</div>
					<div class="registrationfirstdivision">
						<input type="text" id="" name="mobile" placeholder="Mobile" required>
					</div>
					<div class="registrationfirstdivision">
						<input type="text" id="" name="email" placeholder="Email" required>
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