<?php 

include_once ("../database/constants.php");
include_once ("user.php");
include_once ("DBOperation.php");

//For registration process
if (isset($_POST["username"]) AND isset($_POST["email"])) {
	$user = new User();
	$result = $user->createUserAccount($_POST["username"],$_POST["email"],$_POST["password"]);
	echo $result;
}

//For login processing
if (isset($_POST["log_email"]) AND isset($_POST["log_password"])) {
	$user = new User();
	$result = $user->userLogin($_POST["log_email"],$_POST["log_password"]);
	echo $result;
	exit();
}

//To get Category
if (isset($_POST["getCategory"])) {
	$obj = new DBOperation();
	$rows = $obj->getAllRecord("categories");
	foreach ($rows as $row) {
		echo "<option value='".$row["parent_cat"]."'>".$row["category_name"]."</option>";
	}
	exit();
}
 ?>