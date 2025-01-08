<?php
// insert api
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data_arr = json_decode(file_get_contents("php://input"), true);


$user_name =$data_arr["user_name"]; // value of price
$user_email =$data_arr["user_email"]; // value of price
$user_password =$data_arr["user_password"]; // value of price

require_once "dbconfig.php";

$query = "INSERT INTO user_master( user_name, user_email, user_password) 
                       VALUES ('".$user_name."', '".$user_email."', '".$user_password."')";

if(mysqli_query($conn, $query) or die("Insert Query Failed"))
{
	echo json_encode(array("message" => "Product Inserted Successfully", "status" => true));	
}
else
{
	echo json_encode(array("message" => "Failed Product Not Inserted ", "status" => false));	
}

?>