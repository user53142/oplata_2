<?php
$secret = 'f6482bd9a166bf2s43ssc9fe60eb4774f6482bd9a166bf2s43ssc9fe60eb4774';

$data = [
    'shop' => 2550,
    'payment' => time (),
    'amount' => 5000,
    'description' => 'Оплата товара',
    'currency' => 3,
    /*'via' => 'qiwi',*/
];
ksort($data, SORT_STRING);
$sign = hash('sha256', implode(':',$data).':'.$secret);
?>
<form method="POST" action="https://primepayer.com/pay">
    <input name="shop"        value="<?=$data['shop']; ?>">
    <input name="payment"     value="<?=$data['payment'] ?>">
    <input name="amount"      value="<?=$data['amount'] ?>">
    <input name="description" value="<?=$data['description'] ?>">
    <input name="currency"    value="<?=$data['currency'] ?>">
    <!--<input name="via"     value="<?=$data['via'] ?>">-->
    <input name="sign"        value="<?=$sign ?>">
    <button>Оплатить</button>
</form>