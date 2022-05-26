<?php
// How many types of array available in php?
// --> 3 Types
// 1. Index Array 2. Associative Array 3.Multi-Dimentional Array

// =============== Index Array =============== 
$array1 = ['Gujarat','Rajasthan','Jharkhand','Bihar','Kolkota','Uttarakhand']; // method 1 -> You can direct define array , in that you don't need to specify array keyword
$array2 = array('Surat','Jaipur','Palamu','Patna','Hawda','Rishikesh'); // method 1 -> You can direct define array , in that you need to specify array keyword
echo count($array1); // array.lengh /-- Use in Javascript and Jquery // However, in php, we use count function.
echo "<pre>";
print_r($array1);

// =============== Associative Array =============== 
$array = array(); // NULL ARRAY
$array['name'] = ['Roshni','Rohan','Abhishek','Bhupendra','Rachna','Ankit'];
$array['id'] = [15,44,45,21,14,25];
echo "<pre>";
print_r($array);
$new_combine_array = array_combine($array['id'],$array['name']); // array_combine used to combine two array on your left site it assign as Key and on your right it assign as Value
echo "<pre>";
print_r($new_combine_array);

$user_roles = array(
    'id'=>1,
    'name'=>'Bhupendra',
    'role'=> 'Administrator',
    'workhours'=> 8
);
echo "<pre>";
print_r($user_roles);

// ============== Need To Research On it ==============
// $new_array = array_push($array,$user_roles); // How array_push will work
// echo "<pre>";
// print_r($new_array);

$new_array = array_merge($array,$array1); // Merge the array
echo "<pre>";
print_r($new_array);

// =============== Multi-Dimentional Array ===============
$math_array = ['Name','Email','Contact',['Raj','Raj@gmail.com','8521785896']];
echo "<pre>";
print_r($math_array);

// - Row
// | Column
$cars = array ( 
    array("Volvo",22,18), // 0 0 => Volvo
    array("BMW",15,13), // 1 0 => BMW
    array("Saab",5,2), // 2 0 => Saab
    array("Land Rover",17,15) //3 0 => Land Rover
  );
    
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

  // =============== TOMORROW LECTURE TOPICS ARRAY FUNCTIONS ===============
  // array_chunk
  // array_combine
  // array_count_values()
  // array_diff_assoc ()
  // array_filter()----
  // array_key_exists()
  // array_map()
  // array_merge()
  // array_push()
  // array_pop()
  // array_rand()
  // array_replace()
  // array_reverse()
  // array_slice()
  // array_unique()
  // in_array()
  // range()
  // shuffle()

?>


