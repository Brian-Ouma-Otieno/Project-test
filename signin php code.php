<?php

session_start();

//connect to database
$host_name = 'localhost';
$user_name = 'brian';
$password = 'babalao19';
$data_base_name = 'my project';

$db = mysql_connect($host_name, $user_name, $password, $data_base_name);
//mysql_select_db($data_base_name);

//declaring variables
// $First_name;
// $Second_name;
// $Gender = '';
// $Date_of_Birth;
// $Email;
// $Password_1;
// $Password_2;


// call the signin() function if the sign_btn is clicked
if(isset($_POST['Signin_btn'])){
	Signin();
}

function Signin(){
	
	// global $First_name ,$Second_name , $Gender , $Date_of_Birth , $Email , $Password_1 , $Password_2 ;
$First_name =  $Second_name = $Gender =  $Date_of_Birth = $Email = $Password_1 = $Password_2 = "" ;
	
	
	//function defined for escaping form values and sanitizing input
	function Sanitize_input($data){
		
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		
		return $data;
	}
	
	//recieve all input values from the form. Call the sanitize_input() function 
	//defined above to escape form values and sanitize input 
	
	$First_name   	 = Sanitize_input($_POST['First_name']);
	$Second_name  	 = Sanitize_input($_POST['Second_name']);
	$Date_of_Birth   = Sanitize_input($_POST['DOB']);
	$Email      	 = Sanitize_input($_POST['Email']);
	//$Gender  		 = Sanitize_input($_POST['gender']);
	if(isset($_POST['gender'])){
		$Gender = Sanitize_input($_POST['gender']);
	}
	$Password_1	 	 = Sanitize_input($_POST['Password_1']);
	$Password_2 	 = Sanitize_input($_POST['Password_2']);
	
	// define variables for holding error messages
	$FirstnameErr = $SecondnameErr = $GenderErr = $DobErr = $EmailErr = $Password1Err = $Password2Err = "";
	//$First_name = $Second_name = $Gender = $Date_of_Birt = $Email = $Password_1 = $Password_2 = "";
	
	// form validation: ensure that the form is correctly filled
	
		if(empty($_POST['First_name'])){
			
			$FirstnameErr = "Fill your First name";
			echo "$FirstnameErr";
		} 
		else {
			$FirstnameErr = Sanitize_input($_POST['First_name']);
		}
		
		if(empty($_POST['Second_name'])){
			
			$SecondnameErr = "Fill your Second name";
			echo "$SecondnameErr";
		} else {
			$SecondnameErr = Sanitize_input($_POST['Second_name']);
		}
		
		if(empty($_POST['DOB'])){
			
			$DobErr = "Your Date of Birth is required";
			echo "$DobErr";
		} else {
			$DobErr = Sanitize_input($_POST['DOB']);
		}
		
		if(empty($_POST['Email'])){
			
			$EmailErr = "Provide your Email";
			echo "$EmailErr";
		} else {
			$EmailErr = Sanitize_input($_POST['Email']);
		}
		
		if(empty($_POST['gender'])){
			
			$GenderErr = "Choose your Gender";
			echo "$GenderErr";
			} else {
				$GenderErr = Sanitize_input($_POST['gender']);
			}
			
			if(empty($_POST['Password_1'])){
				
				$Password1Err = "Create your Password";
				echo "$Password1Err";
				} else {
					$Password1Err = Sanitize_input($_POST['Password_1']);
					}
				
					if(empty($_POST['Password_2'])){
						
						$Password2Err = "Please Fill to Confirm your Password";
						echo "$Password2Err";
						} elseif ($_POST['Password_1'] != $_POST['Password_2']) {
							//if($_POST['Password_1'] != $_POST['Password_2']){
								$Password2Err = "The Passwords don't Match";
								echo "$Password2Err";
							} else {
								$Password2Err = Sanitize_input($_POST['Password_2']);
								}			
		}
	
	

?>								