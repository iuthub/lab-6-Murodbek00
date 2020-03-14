<?php  

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];
	$birthday = $_POST['birthday'];
	$gender = $_POST['gender'];
	$status = $_POST['status'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$post_code = $_POST['post_code'];
	$home_phone = $_POST['home_phone'];
	$mobile_phone = $_POST['mobile_phone'];
	$card_number = $_POST['card_number'];
	$card_date = $_POST['card_date'];
	$salary = $_POST['salary'];
	$url = $_POST['url'];
	$gpa = $_POST['gpa'];

	// Validation

	
	//1.Name
	if(  empty($name) || strlen($name)<2 ) 
  	{
		if(is_numeric($name))
		{
		   $name_err="Invalid Input Submitted,You need to submit at least 2 character and not number";
	    }
	}
 
	//2.Email
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
	if((preg_match($regex, $email)))
	{
		$email_err = "Invalid email format"; 
	}

	//3.Username
	if( !$username || !strlen($username)<5)
	{
		$username_err = "Error Input submitted";
	}

	//4.Password
	if( !$password || !strlen($password) < 8)
	{
		$password_err ="Error input";
	}
	//5.Confirm Password
	if( $password !== $c_password)
	{
		$c_password_err =  "Your password is not correct";
	}

	//6.Date of Birth
	$reg="/^(0[1-9]|[1-2][0-9]|3[0-1]).(0[1-9]|1[0-2]).[0-9]{4}$/";

	if (!preg_match($reg,$date)) 
	{
		$date_err = "Invalid date format";
	} 
	//7.Gender
	$gender = ucfirst(strtolower($gender));// uppercase first letter
	if($gender != "Male" || $gender != "Female")
	{
		$gender_err= "Invalid input submitted";
	}
	//8.Marital Status
	$status = ucfirst(strtolower($status));
	if($status != "Single" || $status != "Married" || $status != "Divorced" || $status != "Widowed")
	{
		$status_err = "Invalid input submitted";
	}
	//9.Address
	if(empty($address))
	{
		$address_err = "Address field is required";
	}
	//10.City
	if(empty($city))
	{
		$city_err = "City field is required";
	}
	//11.Postal Code
	if(empty($post_code) || !strlen($post_code) == 6)
	{
		if(!is_numeric($post_code))
		{
			$post_code_err = "Invalid input.Post Code must include 6 digit number";
		}
	}
	//12.Home Phone
	if(empty($home_phone) || !strlen($home_phone) == 9)
	{
		if(!is_numeric($home_phone))
		{
			$home_phone_err =  "Invalid input.Home phone number must include 9 digit number";
		}
	}
	//13.Mobile Phone 
	if(empty($mobile_phone) || !strlen($mobile_phone) == 9)
	{
		if(!is_numeric($mobile_phone))
		{
			$mobile_phone_err = "Invalid input.Mobile phone number must include 9 digit number";
		}
	}
	//14.Credit Card Number
	if(empty($card_number) || !strlen($card_number) == 16)
	{
		if(!is_numeric($card_number))
		{
			$card_number_err =  "Invalid input.Credit Card number must include 16 digit number";
		}
	}
	//15.Card Expiry Date
	$reg="/^(0[1-9]|[1-2][0-9]|3[0-1]).(0[1-9]|1[0-2]).[0-9]{4}$/";

	if (!preg_match($reg,$card_date)) 
	{
		$card_date_err =  "Invalid date format";
	}

	//16.Monthly Salary 
	
	$reg_salary = "/[1-9]{3},[0-9]{3}.[00-99]{2}/";

	if(!preg_match($reg_salary,$salary))
	{
		$salary_err =  "Invalid input format submitted!";
	}

	//17.URL
	$reg_url =  "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
	if (empty($url) || !preg_match($reg_url,$website)) 
	{
		$url_err = "Invalid URL";
	} 
	//18.GPA
	if(empty($gpa) || $gpa > 4.5 || $gpa < 0.0)
	{
		$gpa_err = "Invalid input format submitted";
	}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
		<style>
			.error{ color:red;}
		</style>
	</head>
	
	<body>
		<h1>Registration Form</h1>

		 
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<form action="" method="post">
			<label for="name">Name</label><br>
			<input type="text" name="name"><br>
			<span class="error"><?php echo $name_err;?></span>
			<br>
			

			<label for="email">Email</label><br>
			<input type="email" name="email"><br>
			<span class="error"><?php echo $email_err;?></span>
			<br>
			


			<label for="username">Username</label><br>
			<input type="text" name="username" ><br>
			<span class="error"><?php echo $username_err;?></span>
			<br>
			


			<label for="Password">Password</label><br>
			<input type="password" name="password" ><br>
			<span class="error"><?php echo $password_err;?></span>
			<br>
			


			<label for="c_password">Confirm Password</label><br>
			<input type="password" name="c_password" ><br>
			<span class="error"><?php echo $c_password_err;?></span>
			<br>
			


			<label for="birth">Date of Birth</label><br>
			<input type="text" name="birthday" placeholder="dd.MM.yyyy"><br>
			<span class="error"><?php echo $date_err;?></span>
			<br>
			

			<label for="gender">Gender</label><br>
			<input type="text" name="gender"><br>
			<span class="error"><?php echo $gender_err;?></span>
			<br>
			

			<label for="status">Marital Status</label><br>
			<input type="text" name="status"><br>
			<span class="error"><?php echo $status_err;?></span>
			<br>
			
			<label for="address">Address</label><br>
			<input type="text" name="address" ><br>
			<span class="error"><?php echo $address_err;?></span>
			<br>
			


			<label for="city">City</label><br>
			<input type="text" name="city"><br>
			<span class="error"><?php echo $city_err;?></span>
			<br>
			


			<label for="post_code">Postal Code</label><br>
			<input type="number" name="post_code" ><br>
			<span class="error"><?php echo $post_code_err;?></span>
			<br>
			


			<label for="home_phone">Home Phone</label><br>
			<input type="number" name="home_phone" ><br>
			<span class="error"><?php echo $home_phone_err;?></span>
			<br>
			


			<label for="mobile_phone">Mobile Phone</label><br>
			<input type="number" name="mobile_phone" ><br>
			<span class="error"><?php echo $mobile_phone_err;?></span>
			<br>
			


			<label for="card_number">Credit Card Number</label><br>
			<input type="number" name="card_number"><br>
			<span class="error"><?php echo $card_number_err;?></span>
			<br>
			


			<label for="card_date">Credit Card Expiry Date</label><br>
			<input type="text" name="card_date" placeholder="dd.MM.yyyy" ><br>
			<span class="error"><?php echo $card_date_err;?></span>
			<br>
			


			<label for="salary">Monthly Salary</label><br>
			<input type="number" name="salary" placeholder="UZS ###,###.##"><br>
			<span class="error"><?php echo $salary_err;?></span>
			<br>
			


			<label for="url">Web Site Url</label><br>
			<input type="url" name="url" ><br>
			<span class="error"><?php echo $url_err;?></span>
			<br>
			


			<label for="gpa">Overall GPA</label><br>
			<input type="number" name="gpa" ><br>
			<span class="error"><?php echo $gpa_err;?></span>
			<br>
			


			<input type="submit" value="Register" name="submit">

		</form>


	</body>
</html>