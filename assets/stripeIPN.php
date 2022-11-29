<?php
require_once "../php/connect.php";

\Stripe\Stripe::setVerifySslCerts(false);

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$productID = $_GET['id'];

if (!isset($_POST['stripeToken']) || !isset($products[$productID])) {
	header("Location: ../pages/merch.php");
	exit();
}

$token = $_POST['stripeToken'];
$email = $_POST["stripeEmail"];

// Charge the user's card:
$charge = \Stripe\Charge::create(array(
	"amount" => $products[$productID]["price"] * 100,
	"currency" => "uah",
	"description" => $products[$productID]["title"],
	"source" => $token,
));

//send an email
//store information to the database
header("Location: ../pages/merch.php");
