<?php
session_start();
// Get our helper functions
include("inc/functions.php");

// Set variables for our request
$api_key = "fb462d3031f4188db72434ba6dbb23c7";
$shared_secret = "2c77a3053eaddd1a80c6b20c044c6bc1";
$params = $_GET; // Retrieve all request parameters
$hmac = $_GET['hmac']; // Retrieve HMAC request parameter

$params = array_diff_key($params, array('hmac' => '')); // Remove hmac from params
ksort($params); // Sort params lexographically

$computed_hmac = hash_hmac('sha256', http_build_query($params), $shared_secret);

// Use hmac data to check that the response is from Shopify or not
if (hash_equals($hmac, $computed_hmac)) {

	// Set variables for our request
	$query = array(
		"client_id" => $api_key, // Your API key
		"client_secret" => $shared_secret, // Your app credentials (secret key)
		"code" => $params['code'] // Grab the access key from the URL
	);

	// Generate access token URL
	$access_token_url = "https://" . $params['shop'] . "/admin/oauth/access_token";

	// Configure curl client and execute request
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $access_token_url);
	
	//print_r($curl_setopt);die;
	curl_setopt($ch, CURLOPT_POST, count($query));
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));
	$result = curl_exec($ch);
	curl_close($ch);

	
	
	// Store the access token
	$result = json_decode($result, true);
	$access_token = $result['access_token'];
    $_SESSION['id'] = $access_token;
    print_r($_SESSION['id']);
	// Show the access token (don't do this in production!)
	echo "I am you acess token: ".$access_token;
  $shop = $_GET['shop'];
   $redirectUrl = "https://".$shop.'/admin/apps/startup/';
// Redirect
    header("Location: " . $redirectUrl);
} else {
	// Someone is trying to be shady!
	die('This request is NOT from Shopify!');
}
?>