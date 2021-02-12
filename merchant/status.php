<?php

include "config.php";

if (isset($_POST) && $_POST != null) {
	if ($payment_port == "" || $payment_port == 80) {
		$url = $payment_host;
	} else {
		$url = $payment_host . ":" . $payment_port;
	}

	$ch = curl_init("http://" . $url . "/status");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));
	$response = json_decode(curl_exec($ch), true);
	curl_close($ch);

	if ($response["status"] == "success") {
		header("Location: " . $success_url);
	} else {
		header("Location: " . $error_url);
	}
}

?>