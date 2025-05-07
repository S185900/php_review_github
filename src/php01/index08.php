<?php
// http://localhost/php01/index08.php

// $people = array('Taro', 'Jiro', 'Saburo');

// var_dump($people);
// echo "<br />";
// echo "<br />";
// echo $people[0];



// $people = array(
//     'p1' => 'Taro',
//     'p2' => 'Jiro',
//     'p3' => 'Saburo'
// );

// var_dump($people);

// $people = [
//   [
//     "last_name" => "山田",
//     "first_name" => "太郎",
//     "age" => 29,
//     "gender" => "男性"
//   ],
//   [
//     "last_name" => "鈴木",
//     "first_name" => "次郎",
//     "age" => 25,
//     "gender" => "男性"
//   ],
//   [
//     "last_name" => "佐藤",
//     "first_name" => "花子",
//     "age" => 20,
//     "gender" => "女性"
//   ]
// ];

// echo $people[0]["last_name"];



// $people = [
//     [
//         "person1" => "山田",
//         "person2" => "鈴木",
//         "person3" => "平野",    
//     ]
// ];

// foreach ($people as $who)
// {
//     foreach ($who as $key => $value)
//     {
//         echo $key . "は" . $value . "です。";
//         echo "<br />";
//     }
// }

// $people = array('Taro', 'Jiro', 'Saburo');

// foreach ($people as $person) {
//   echo $person;
//   echo '<br />';
// }

// $people = [
//     "person1" => "山田",
//     "person2" => "鈴木",
//     "person3" => "平野"
// ];

// // foreach ($people as $key => $value) {
// //     echo $key . "は" . $value . "です。<br />";
// // }

// foreach ($people as $person1_2_3 => $name) {
//     echo $person1_2_3 . "は" . $name . "です。<br />";
// }



// $people = [
//     [
//         "person1" => "Taro",
//         "person2" => "Jiro",
//         "person3" => "hanako"
//     ],
//     [
//         "person1" => "25",
//         "person2" => "20",
//         "person3" => "16"
//     ],
//     [
//         "person1" => "men",
//         "person2" => "men",
//         "person3" => "women"
//     ]
// ];

// $keys = array_keys($people[0]); // person1, person2, person3 を取得

// foreach ($keys as $key) {
//     echo $people[0][$key] . "(" . $people[1][$key] . "歳" . $people[2][$key] . ")";
//     echo "<br />";
// }

$people = [
    [
        "person" => "Taro",
        "age" => "25",
        "gender" => "men"
    ],
    [
        "person" => "Jiro",
        "age" => "20",
        "gender" => "men"
    ],
    [
        "person" => "Hanako",
        "age" => "16",
        "gender" => "women"
    ]

];

foreach ($people as $person) {
    echo $person["person"] . "(" . $person["age"] . "歳" . $person["gender"] . ")<br />";
}