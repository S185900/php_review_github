<?php
require_once('../functions/search_city_time.php');
$tokyo = search_city_time('東京');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/result.css">
</head>
<body>
    <!-- http://localhost/php02/result.php -->
    <header class="header">
        <div class="header_inner">
            <a class="header_logo" href="index.html">
                World Clock
            </a>
        </div>
    </header>
        <main>
            <div class="result-display">
                <div class="left-time">
                    <img class="flg-display" src="./img/national_flag_img/japan.jpg" alt="日本の国旗">
                    <div class="time-display">
                        <p class="text">東京</p>
                        <p class="text">2023年10月1日 12:00</p>
                    </div>
                </div>
                <div class="right-time">
                    <img class="flg-display" src="./img/national_flag_img/japan.jpg" alt="日本の国旗">
                    <div class="time-display">
                        <p class="text">東京</p>
                        <p class="text">2023年10月1日 12:00</p>
                    </div>
                </div>
            </div>
        </main>
</body>
</html>