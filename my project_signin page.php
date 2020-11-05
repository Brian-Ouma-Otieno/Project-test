
<?php
include ('signin php code.php');

// $f=$_POST['First_name'];
// $s=$_POST['Second_name'];
// $d=$_POST['DOB'];
// $e=$_POST['Email'];
// $g=$_POST['gender'];
// $p=$_POST['Password_1'];
// $p2=$_POST['Password_2'];

// if(isset($_POST['Signin_btn'])){

	//echo $f. ' '. $s. ' '. $d. ' '. $e. ' '. $g. ' '. $p. ' '. $p2;

// 	if(empty($f) || empty($s) || empty($d) || empty($e) || empty($g) || empty($p) || empty($p2)){
// 		echo ' fill all values';
// 	}
	

// 	//echo "hello";
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signin Page</title>
	<link rel="stylesheet" href="project.css">
</head>
<body>

	<form  id="form" action = " my project_signin page.php " method="post">  <!---->

		<div class="">
			<label>First Name:</label> <br> 
			<input type="text" name="First_name" value="<?php if(isset($First_name)) {echo $First_name;}?>"> 
		</div>

		<div class="">
			<label>Second Name:</label> <br> 
			<input type="text" name="Second_name"  value="<?php if(isset($Second_name)) {echo $Second_name;}?>">
		</div>

		<div class="">
			<label>Date of Birth:</label> <br> 
			<input type="text" name="DOB" value="<?php if(isset($Date_of_Birth )) {echo $Date_of_Birth ;}?>">
		</div>

		<label>E-mail:</label> <br> 
			<input type="email" name="Email" value="<?php if(isset($Email )) {echo $Email ;}?>">
			<!-- <span class="error">* <?php  global $EmailErr; echo $EmailErr;?></span> -->
		</div><br><br> 

		<div>
			Gender:
			*<input type="radio" name="gender" value="male"> Male 
			<input type="radio" name="gender"  value="female"> Female 
			<input type="radio" name="gender"  value="other"> Other
		</div> <span>  <?php global $GenderErr; echo $GenderErr;?></span>
		<br> 

		<div class="">
			<label>Password:</label> <br> 
			<input type="text" name="Password_1">
		</div>

		<div>
			<label>Confirm Password:</label> <br> 
			<input type="text" name="Password_2">
		</div>


		<div class=""><br>
			<button type="submit" class="btn" name="Signin_btn">Signin</button><br>
		</div> <br>
	</form>	
</body>
</html>




