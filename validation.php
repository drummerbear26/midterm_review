<?php
$errors = array();


$firstname = $lastname = $email = "";
if(isset($_POST['george'])){
	$submitted = true;
	echo "checking errors";
	//check to see if first name exists
	if(empty($_POST['firstname'])){
		$errors['firstname']="First name is required";
	} else {
		$firstname = checkData($_POST["firstname"]);
	}
	if(empty($_POST['lastname'])){
		$errors['lastname']="Last name is required";
	} else {
		$lastname = checkData($_POST["lastname"]);
	}
	if(empty($_POST["email"])){
		$errors['email'] = "Email is required";
	}else {
		$email = checkEmail($_POST["email"]);
	}
	$firstname = checkData($_POST["firstname"]);
	$lastname = checkData($_POST["lastname"]);
	$email = checkEmail($_POST["email"]);
	
}

function checkData($string){
	$string = trim($string);
	$string = stripcslashes($string);
	$string = htmlspecialchars($string);
	return $string;
	
}
function checkEmail($email){
	global $errors;
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 $errors['email'] = "Invalid email format"; 
	}
	return checkData($email);
}

function checkError($fieldname){
	global $errors;
	if(isset($errors) && isset($errors[$fieldname])){
		return "<div class='error'>".$errors[$fieldname]."</div>";
	} 
	
}
/*function checkError($dude){
	echo $dude;
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<input type="hidden" name="george">
<div>
	<label for="firstname">First name</label>
	<br>
	<input id="firstname" type="text" name="firstname" value="<?php echo $firstname;?>">
	<?php echo checkError("firstname"); ?>
	
</div>
<div>
	<label for="lastname">Last name</label>
	<br>
	<input id="lastname" type="text" name="lastname" value="<?php echo $lastname;?>">
	<?php echo checkError("lastname"); ?>
	
<div>
	<label for="email">email</label>
	<br>
	<input id="email" type="text" name="email" value="<?php echo $email;?>">
	<?php echo checkError("email"); ?>
</div>
	<button type="submit">Submit</button>
</form>
</body>
</html>