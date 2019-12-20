<?php
$ProductId = $_POST['ProductId'];
$ProductTitle = $_POST['ProductTitle'];
$desc = $_POST['body_html'];
session_start();
// Get our helper functions
include("inc/functions.php");
include("templates/index.html");
// Set variables for our request
$shop = "hauzkhas";

$token = $_SESSION['id'];
$query = array(
	"Content-type" => "application/json" // Tell Shopify that we're expecting a response in JSON format
);

// Run API call to get products
$products = shopify_call($token, $shop, "/admin/products.json", array(), 'GET');

// Convert product JSON information into an array
$products = json_decode($products['response'], TRUE);


// Get the ID of the first product
$product_id = $ProductId;
$product_title = $products['products'][0]['title'];
// Modify product data
$modify_data = array(
	"product" => array(
		"id" => $ProductId,
		"title" => $ProductTitle,
		"body_html"=>$desc
	)
);

// Run API call to modify the product
$modified_product = shopify_call($token, $shop, "/admin/products/" . $product_id . ".json", $modify_data, 'PUT');

// Storage response
$modified_product_response = $modified_product['response'];
print_r($modified_product_response);die;
?>