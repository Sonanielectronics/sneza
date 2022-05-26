<?php

echo "<pre>";
print_r(filter_list());  // mainly Used for validation as a user input

// How to remove html tags using php
$var = "<p>Good Evening It's nice to meet you.. Have a greate day ahead..</p>";
echo $var;
echo (filter_var($var, FILTER_SANITIZE_STRING));
// Not work in latest php because it's by default remove when we write print.


$int = 25;
echo "</br>";
if (!filter_var($int, FILTER_VALIDATE_INT) === false){
    echo ("Integer is valid");
} else {
    echo ("Integer is not valid");
}
echo "</br>";

// for Ip address filteration
$k = "192.168.0.1";
if (!filter_var($k, FILTER_VALIDATE_IP) === false) {
    echo ("$k is a valid IP address");
} else {
    echo ("$k is not a valid IP address");
}

echo "</br>";
$email = "Milin@gmail.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo ("$email is a valid email address");
} else {
    echo ("$email is not a valid email address");
}
echo "</br>";
// -- So at the end FILTER_VALIDATE is mostly used for validation and FILTER_SANITIZE is used for illegal characters

// ====== Validate Integer with appropriate Range ======
$a = 2;
$min = 1;
$max = 20;
if (filter_var($a, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
    echo "Not Valid!!!";
} else {
    echo "Valid!!";
}

// ====== Callback Function ======
$array = ["Jeremy", "Robert", "Chris", "CaptainAmerica", "Scarlett", "Brie", "Hulk", "Benedict", "Tom", "Loki", "RocketRacoon"];
$array2 = ["Hawkeye", "Ironman", "Thor", "CaptainAmerica", "BlackWidow", "CaptainMarvel", "Hulk", "DoctorStrange", "Spiderman", "Loki", "RocketRacoon"];

function arraymatch($ary, $ary2)
{
    if ($ary == $ary2) {
        return "match";
    }
    return "not match";
}

$new_array = array_map("arraymatch", $array, $array2);
echo "<pre>";
print_r($new_array);
