<?php
$shop = $_POST["Storeaddress"];
$api_key = "fb462d3031f4188db72434ba6dbb23c7";
$scopes = "read_orders,write_products";
$redirect_uri = "https://b7096c5a.ngrok.io/startup/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();
?>