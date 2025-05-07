<?php
// http://localhost/php01/index07.php

// function outputHello()
// {
//     echo "Hello World!";
// }

// outputHello();

// function text($num1, $num2)
// {
//     $sum = $num1 + $num2;
//     return $sum;
// }

// $total= text(5, 10);
// echo $total . "<br />";

// function text($num1, $num2)
// {
//     $sum = $num1 + $num2;
//     return $sum;
// }

// $total = text(2, 3);
// echo $total . "<br />";

// function score($score1, $score2, $score3)
// {
//     $total = $score1 + $score2 + $score3;

//     if ($total > 210) {
//         echo "合計点は" . $total . "点なので合格です。";
//     } else {
//         echo "合計点は" . $total . "点なので不合格です。";
//     }

// }
//    echo score(80, 70, 40);

function area($under_line1, $hight_line2)
{
    $tri_area = $under_line1 * $hight_line2 / 2;
    return $tri_area;
}
function area2($under_line1, $hight_line2)
{
    return $under_line1 * $hight_line2;
}
echo "三角形の面積は" . area(5, 10) . "センチ平方メートルです。" . "<br />";
echo "長方形の面積は" . area2(5, 10) . "センチ平方メートルです。" . "<br />";