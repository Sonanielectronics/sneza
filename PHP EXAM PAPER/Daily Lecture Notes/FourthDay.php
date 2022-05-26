<?php
// ========== Ternary Operator ==========
$y = "Rahul";
$x = $y ?? "No Value"; // How It works $x = if $y have value then it will assign $x = $y otherwise it take $x = "No value";
// echo $x;


// ========== If else ==========
// $p = 25;
// $q = 26;
// if ($p == 25 || $q == 21){
//     print "IF Part!!";
//     if($q == 26)
//     {
//         print "Nested IF!!";
//     }
//     else{
//         print "Have not match value";
//     }
// }
// else if($p == 25 && $q ==26){
//     print("Else IF!!!");
// }    
// else{
//     print "Else Part!!";}
// ============= Switch ==============
// 
//  

// ========== Loops ==========
// ------ While Loop ------
$x = 20;
// while($x<25){ //20, 21,22,23,24
//     echo $x."</br>";
//     $x++;
// }
// ------ Do While Loop ------
// do{
//     echo $x."</br>";
//     $x++;
// }while($x < 20);
// ------ FOR Loop ------
// for($x = 0;$x < 5;$x++){ 
//     for($y = 5;$y > 2;$y--){
//         echo $y."</br>"; // Infinite when $y--
//     }
//     echo $x."</br>"; // 5 4 3 0 | 5 4 3 1| 5 4 3 2| .... 19
// }

// ------ FOR Each Loop ------
// Whenever we work with JSON at that time we will use ForEach Loop
// However, It is mainly use for array.


$array1 = ['Red','Green','Blue','Yellow','Grey','Pink','Black'];
$array = ['Apple','Banana','Litchi','Kiwi','Grapes','Mango',$array1];
$array2 = array('Keyboard','Monitor','RAM','Scanner','Graphic Card','Central Processing Unit','Power Cable');

foreach($array as $ComputerParts){
    echo "<pre>";
   print_r($ComputerParts);
 }
?>