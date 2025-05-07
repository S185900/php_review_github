<?php
// フォームデータを取得
$menu = $_POST['menu'] ?? '未選択';
$quantity = $_POST['quantity'] ?? 0;

// 保存先のファイル名
$file = 'orders.txt';

// 保存する内容
$order = "メニュー: $menu, 注文数: $quantity\n";

// ファイルに書き込む
if (file_put_contents($file, $order, FILE_APPEND)) {
    echo "注文が保存されました！";
} else {
    echo "注文の保存に失敗しました。";

