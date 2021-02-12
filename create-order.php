<?php

    if (isset($_POST["user"]) && $_POST["user"] != null ||
        isset($_POST["phone"]) && $_POST["phone"] != null ||
        isset($_POST["email"]) && $_POST["email"] != null ||
        isset($_POST["address"]) && $_POST["address"] != null ||
        isset($_POST["amount"]) && $_POST["amount"] != null ||
        isset($_POST["title"]) && $_POST["title"] != null ||
        isset($_POST["link"]) && $_POST["link"] != null){

        $order["id"] = substr(md5(rand(0, 999999)), 0, 8);
        $order["price"] = $_POST["amount"];
        $order["link"] = $_POST["link"];
        $order["productName"] = $_POST["title"];
        $order["numOrder"] = rand(10000000, 99999999);

        file_put_contents("id/" . $order["id"] . ".json", json_encode($order, JSON_UNESCAPED_UNICODE));

        echo $order["id"];
    } else {
        echo "error";
    }

?>