<?php
// PHP FUNCTIONS
// HOW MANY TYPES OF FUNCTION AVAILABLE IN PHP?
// -- 1. User Define Functions 
// -- 2. Pre-Define (In Built) Functions 

// Examples of Pre-Define Functions 
// strlen() , ltrim() , rtrim() , md5() , explode() , implode()
// hex2bin(), bin2hex() , strrev() , strstr() , print() , die() , print_r() , echo(), fprint() , sha1(), pi() , max(), min(), sqrt() , round(), abs(), rand(),date()

// Examples of User Define Functions
// Parameterized Function
// declare(strict_types=1);
// function MILIN(float $a,int $b){
//     echo "Every College $a(B.Com and M.com) have beautiful GirlFriends!!!";
//     echo "</br>";
//     echo "In Surat many of the $b came from DRB and S.D Jain Colleges. ";
// }
// MILIN("Rahul",10);

declare(strict_types=1); // strict requirement

function addNumbers(int $a = 20, int $b) {
  return $a + $b;
}
echo addNumbers(20); 
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>