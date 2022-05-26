<?php
// =============== ARRAY FUNCTIONS ===============
echo "==== array_chunk ====" . "</br>";
$name = ['Rajesh', 'Rakesh', 'Ramesh', 'Rohan', 'Radha', 'Roshni', 'Radhika'];
echo "<pre>";
print_r(array_chunk($name, 2)); // array_chunk('Array Name','Splits array in specific range')
echo "</br>" . "==== array_combine ====" . "</br>";
$id = [1, 2, 3, 5, 8, 10, 45];
echo "<pre>";
print_r(array_combine($id, $name)); // It will make a new array as key -> value pair , However,function will work as ('key','value')

echo "</br>" . "==== array_count_values ====" . "</br>";
$internation = ['Jet AirWays', 'Vistara Airlines', 'Go Air', 'Indigo', 'Air India', 'Jet AirWays'];
echo "<pre>";
print_r(array_count_values($internation)); // Jet Airways->2 , other will print -> 1  

echo "</br>" . "==== array_diff_assoc ====" . "</br>";
$international = array(
    "airline_name" => 'Jet AirWays',
    "airline_id" => 1,
    "departure_date" => '2022-07-24'
);
$national = array(
    "airline_name" => 'Go Air',
    "airline_id" => 1,
    "departure_date" => '2022-07-25'
);
echo "<pre>";
print_r(array_diff_assoc($international, $national));  // It will check the key and as well as value from first array // It's shows the diffrence between two associative array using key.

echo "</br>" . "==== array_key_exists ====" . "</br>";
echo "<pre>";
if(array_key_exists('airline_name',$national))
    print_r($national);
else
    echo "Key is not Exists!!!";
// It checks the key , if key is exist then it moves to if part otherwise else part

echo "</br>" . "==== array_map ====" . "</br>";
echo "<pre>";
$nationall = ['Vistara Airlines','Go Air','Indigo','Air India','Tata Airlines'];
$PNR = ['UK-963','G8-142','6E-504','AI-741','TA-842'];
function display($Airline_name,$code){
    return $Airline_name." ".$code;
}
$variable = array_map("display",$nationall,$PNR);
print_r($variable);
// It will use to execute existing function "Here we use display"
// Most Probably is use for multiple functioanlity such as maths operation, concatination and many other programming logics

echo "</br>" . "==== array_merge ====" . "</br>";
echo "<pre>";
print_r(array_merge($nationall,$PNR)); // It will take first array as 1st element  and another array concat after first array 

echo "</br>" . "==== array_push ====" . "</br>";
echo "<pre>";
array_push($PNR,$nationall);
print_r($PNR);

echo "</br>" . "==== array_pop ====" . "</br>";
echo "<pre>";
$PNR1 = ['UK','AI','G8','QE'];
array_pop($PNR1); // Last element from the array will be remove
print_r($PNR1);
 
echo "</br>" . "==== array_rand ====" . "</br>";
echo "<pre>";
$random_keys = array_rand($PNR1,2);
print_r($random_keys);

echo "</br>" . "==== array_replace ====" . "</br>";
echo "<pre>";
$maths = [10,20,30,40];
$maths1 = [25,35,45,55];
$random_keys = array_replace($maths,$maths1);
print_r($random_keys); // Array will replace according to keys.

echo "</br>" . "==== array_reverse ====" . "</br>";
echo "<pre>";
$maths2 = [15,25,35,45];
$random_keys = array_reverse($maths2);
print_r($random_keys); // Array will reverse.

echo "</br>" . "==== array_slice ====" . "</br>";
echo "<pre>";
$maths2 = [15,25,35,45];
$random_keys = array_slice($maths2,2);
print_r($random_keys); // Array will return the value after 2 elements.

echo "</br>" . "==== array_unique ====" . "</br>";
echo "<pre>";
$maths2 = [15,35,35,45];
$random_keys = array_unique($maths2);
print_r($random_keys); // It will give the unique value and remove the duplication value.

echo "</br>" . "==== in_array ====" . "</br>";
echo "<pre>";
$maths2 = [15,35,35,45];
if(in_array(5,$maths2))
    print_r($random_keys);
else 
    echo "Value Not Exists in array"; 
// It will check if the value exists in current array or not.

echo "</br>" . "==== range ====" . "</br>";
echo "<pre>";
$range = range(5,50,5);
print_r($range);

echo "</br>" . "==== shuffle ====" . "</br>";
echo "<pre>";
$maths2 = [15,35,35,45];
shuffle($maths2);
print_r($maths2); // Only value will be shuffle

echo "</br>" . "==== array_filter ====" . "</br>";
echo "<pre>";
$index = [0,1,'true','false',''];
print_r(array_filter($index));
// It will be filter the value 
