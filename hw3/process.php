<?php

if(isset($_POST['Fname'])){ $Firstname  = $_POST['Fname']; }
if(isset($_POST['Lname'])){ $Lastname   = $_POST['Lname']; }
if(isset($_POST['Email'])){ $Kentemail  = $_POST['Email']; }
if(isset($_POST['major'])){ $Major      = $_POST['major']; }
if(isset($_POST['OtherMajor'])){ $OthrMajor = $_POST['OtherMajor']; }
if(isset($_POST['degree'])){ $Degree    = $_POST['degree']; }
if(isset($_POST['Yentry'])){ $YearEntry = $_POST['Yentry']; }
if(isset($_POST['Ygrad'])){ $YearGrad   = $_POST['Ygrad']; }
if(isset($_POST['honors'])){ $Honors    = $_POST['honors']; }
if(isset($_POST['intern'])){ $Intern    = $_POST['intern']; }
if(isset($_POST['position'])){ $Position = $_POST['position']; }
if(isset($_POST['location'])){ $Location = $_POST['location']; }

// Validation starts
if (!preg_match("/[0-9]/", $Firstname))
{
 if (!preg_match("/[0-9]/", $Lastname))
 {
	echo "Student Name: $Firstname $Lastname <br>";
	$link = "form.html";
	$load = "return false;";
// Validation kent mail
if(filter_var($Kentemail, FILTER_VALIDATE_EMAIL))
 {
       $ns = "@";
       $newstring = substr($Kentemail, 8, -8);
		if($ns == $newstring)
             {
                echo "Kent Mail ID: $Kentemail <br>";
		if($OthrMajor != "")
		{
			echo "Major: $OthrMajor <br>";
		}
		else{
			echo "Major: $Major <br>";}
			echo "Degree: $Degree <br>";
			$noyears = $YearGrad - $YearEntry;
			if($YearEntry > 2000)
			{
			if($YearGrad < 2020)
			{	
			// Year validation	
			if($noyears >= 1 && ($YearEntry < $YearGrad))
			{
			echo "Year of Entry: $YearEntry <br>";
			echo "Year of Graduation: $YearGrad <br>";
			echo "Honors College: $Honors <br>";
			echo "Internship: $Intern <br>";
			// Location validation
			if (!preg_match("/[0-9]/", $Position))
			{
			echo "Position: $Position <br>";
			if($Location != "")
			{
			echo "Location: $Location <br>";
			$sender_email=$_POST['Email'];
			$email_header="From: vtangutu@kent.edu";
			$email_subject="Thanks for the Survey";
			$email_message=" Survey submitted successfully";
			$email_header = "From: vtangutu@kent.edu\r\n";
			$email_header .= "Reply-to: vtangutu@kent.edu\r\n";
			mail($sender_email, $email_subject,$email_message, $email_header);

			echo " <h1> <b> Student Graduation survey is submitted successfully, Confirmation mail sent to ".$_POST['Email']." </b>";
			}
		else{echo "<h1> <b> Error Message: Choose atleast one Location </b> <br>";
			echo "<a href='$link'>Click</a> to submit Survey";     
			}
			}
		else{echo "<h1> <b> Error Message: Invalid Position contains number </b> <br>";
			echo "<a href='$link'>Click</a> to submit Survey";     
			}
			}
		else{echo "<h1> <b> Error Message: Invalid  no of years between Entry and Graduation should be greater than 1 OR Year of Entry should be less than Year of Graduation </b> <br>";
			echo "<a href='$link'>Click</a> to submit Survey";     
			}
			}
		else
			{
			echo "<h1> <b> Error Message: Invalid year should be less than 2020 </b> <br>";
			echo "<a href='$link'>Click</a> to submit Survey";     
			}
			}
		else
			{ 
			echo "<h1> <b> Error Message: Invalid year should be greater than 2000 </b> <br>";
			echo "<a href='$link'>Click</a> to submit Survey";     
			}		
		  	}
 		else {
    		echo "<h1> <b> Error Message: Invalid  Kent email Address. </b> <br>";
			echo "<a href='$link'>Click</a> to submit Survey";     
    		}
 			}
		else{
 			echo " <h1> <b> Error Message: Invalid kent email Address </b> <br>";
			echo "<a href='$link'>Click</a> to submit Survey";        
 			}
 			}
 		else
 			{
			echo "<h1> <b> Error Message: Invalid Last name contains number </b> <br>";
			echo "<a href='$link'>Click</a> to submit Survey";     
 			}
			}
		else 
			{
			echo " <h1> <b> Error Message: Invalid First name contains number </b> <br>";
			echo "<a href='$link'>Click</a> to submit Survey";     
			}
?>