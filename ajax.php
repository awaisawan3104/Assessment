<?php
require("functions.php");


$errorMSG = "";
$name = $phone = null;

// NAME
if (empty($_POST["name"])) {
	$errorMSG = "Name is required ";
} else {
	$name = clean($_POST["name"]);
}


// NAME
if (empty($_POST["phone"])) {
	$errorMSG = "Phone is required ";
} else {
	$phone = clean($_POST["phone"]);
}


$sqli="INSERT INTO `users`
(`name`, `phone`)
VALUES ('$name','$phone')";
$success=true;
if(!mysqli_query($con,$sqli)){
  echo mysqli_error($con);
  $success = false;
}

// SUBJECT






if ($success && $errorMSG == ""){
   echo "success";
}else{
	if($errorMSG == ""){
		echo "Something went wrong :(";
	} else {
		echo $errorMSG;
	}
}

?>
