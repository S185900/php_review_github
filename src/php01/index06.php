<?php
// http://localhost/php01/index06.php
// for ($i = 0; $i < 10; $i++) {
//     echo $i;
//     echo "<br>";
// }
// echo "<br />" . "<br />";
// for ($e = 0; $e <= 10; $e++) {
//     echo $e;
//     echo "<br>";
// }
// echo "<br>";

// for ($w = 1; $w < 6; $w++) {
//     echo ($w * 2);
//     echo "<br />";
// }

// $count = 0;
// while ($count < 20) {
//     echo ++$count;
//     echo "<br />";
// }


// $count = 0;
// while ($count < 20) {
//     $count += 1;
//     echo $count . "<br />";
// }
// // echo "<br />" . "<br />";

// $count = 0;
// while ($count <= 100) {
//     if ($count === 20) {
//         break;
//     }
//     if ($count % 3 === 0) {
//         $count += 1;
//         continue;
//     }
//     echo $count . "<br />";
//     $count += 1;
// }




// $i = 0;
// do {
//   echo $i . '<br />';
//   $i++;
// } while ($i < 5);

// $num = 0;
// do {
//     echo "num = " . $num . '<br />';
//     $num++;
// } while ($num < 3);

// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 3) {
//         echo "Fizz";
//         continue;
//     }
//     if ($i % 5) {
//         echo "Buzz";
//         continue;
//     }
//     if ($i % 3 && $i % 5) {
//         echo "FizzBuzz";
//         continue;
//     }
//     if ($i !== 0) {
//         echo "数字";
//         break;
//     }
    
//     echo $i . "<br />";

// }


// $Fizz = "Fizz";
// $Buzz = "Buzz";
// $FizzBuzz = "FizzBuzz";

// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 3 === 0 && $i % 5 === 0) {
//         echo $FizzBuzz . "<br />";
//     } elseif ($i % 3 === 0) {
//         echo $Fizz . "<br />";
//     } elseif ($i % 5 === 0) {
//         echo $Buzz . "<br />";
//     } else {
//         echo $i . "<br />";
//     }
// }

// for ($i = 1; $i <= 5; $i++) {
//     for ($j = 1; $j <= 5; $j++) {
//         echo "●";
//     }
//     echo "<br />";
// }


for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        echo "●";
    }
    echo "<br />";
}