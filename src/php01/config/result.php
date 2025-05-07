<?php
$user_name = htmlspecialchars($_POST['user_name'], ENT_QUOTES);
print "注文者：" . $user_name . "様ですね";
echo "<br />";
$product = htmlspecialchars($_POST['product'], ENT_QUOTES);
print "注文する商品は：" . $product . "ですね";
echo "<br />";
$order_number = htmlspecialchars($_POST['order_number'], ENT_QUOTES);
print "数量は：" . $order_number . "ですね";
echo "<br />";

