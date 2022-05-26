<?php
// Scope
// Object 
// String and It's Function
// ============= Global Scope ===============
echo "============= Global Scope ==============="."</br></br>";
$x = 25; // Global Scope
function display(){
    // echo "Variable calling inside the function $x"; // Warning Error
    //Its create error because we declare the varible inside the function
}
display();
echo "Varible calling outside the function $x"."</br></br>";
// Here we can access variable because we are calling the variable outside the function
// ============ Local Scope ===================
echo "============= Local Scope ==============="."</br></br>";
function disp(){
    $y = 20; // Local Scope
    echo "Variable calling inside the function $y"."</br></br>"; 
    //Its create working because we declare the varible inside the function
}
disp();
// echo "Varible calling outside the function $y";  // Warning Error
// Here we can't access variable because we are calling the variable inside the function
// ============= Global Keyword ===============
echo "============= Global Keyword ==============="."</br></br>";
$a = 20;
$b = 30;
function math(){
    global $a, $b,$c; // Use of global keyword
    // Mainly used for accessing the global varible inside the function
    $c = $a + $b; 
    echo "Addition of $a and $b is equal to $c"."</br>"; 
    //Its create working because we declare the varible outside the function
}
math();
echo $a."</br>";
echo $b."</br>";
echo $c."</br></br>";
// Here we can access all varibales because we are using global keyword inside the function
// However, global keyword not works outside the function for variable define.
// ============= Update Global Variables Directly ===============
echo "============= Update Global Variables Directly ==============="."</br></br>";
$k = 20;
$q = 25;
function multi(){
    $GLOBALS['z'] = $GLOBALS['k'] * $GLOBALS['q'];
}
multi();
echo $z."</br></br>";
// ============= Static Keyword ===============
echo "============= Static Keyword ==============="."</br></br>";
// Whenever you are calling the function the static varible value will remain store so whenever you calling the function for another time it will take last value as a current value.
function incre(){
    static $r = 25; // Static Keyword
    $z = 21;
    echo $r."</br>";
    echo $z."</br>";
    $r++;
    $z++;
}
incre(); // 25 , 21 // 25 , 22 // 25 , 21
incre(); // 26 , 23 // 26 , 22 // 26 , 21
incre(); // 27 , 24 // 27 , 22 // 27 , 21

// ============= Data Types ===============
echo "============= Data Types ==============="."</br>";
echo "============= Example of Object Data type ==============="."</br></br>";
// Example of office Class Object
class office{
    public $employee_id;
    public $employee_name;
    // Parameterised Constructor Define
    public function __construct($employee_id,$employee_name){
       $this->employee_id = $employee_id; 
       $this->employee_name = $employee_name;
    }
    // Function Define
    public function dispa(){
        return "Employee id $this->employee_id and Employee Name is: $this->employee_name";
    }
}
$office = new office(25,"Kaushal"); // Data Object Of Office 
// Here $office is a dataobject
echo $office->dispa();
// Example of Student Class Object
class student {
    public $student_id;
    public $student_name;
    // Parameterise Constructor
    public function __construct($student_id,$student_name)
    {
        $this->student_id = $student_id; // $a = 1;
        $this->student_name = $student_name; // $d = Rahul;
    }
    // Function Define
    public function student_display(){
    return "Student Name is : $this->student_name and id of that student is : $this->student_id"."</br>";
    }
}
// Creating Object for class so we can access the function which is declared inside the class.
$student = new student(1,"Rahul"); // We assign the value as we are using paramterized constructor inside the class
echo $student -> student_display()."</br>";
$student1 = new student(2,"Ramesh"); 

echo $student1 -> student_display()."</br>";

// ============= String and It's Function ===============
echo "============= String and It's Function ==============="."</br></br>";
$em ="Simple Present";
$a ="Present Tense";
echo $a."</br>";
echo strlen($a)."</br>"; // String Length
echo strrev($a)."</br>"; // String reverse
$k = "NITIN";
echo strrev($k)."</br>"; // Palindrome Example In terms of PHP

echo strtoupper($a)."</br>"; // All Character Upper Case 
echo strtolower($a)."</br>"; // All Character Lower Case

echo strpos($a,"en")."</br>"; // Give the position of any character from given String




//d in real life experince?
// also take some information on it , I want answer from every student
// sha1() // What is the main difference between md5() and sha1()// Tomorrow's Lecture String Function
// explode() // With use
// implode() // With use
// md5() // Where it is use
// // what will be the o/p of sha1()?
// bin2hex() // Try one example on it
// hex2bin() // Try one example on it
// trim()  // Try one example on it-
// ltrim() // Try one example on it
// rtrim() // Try one example on it
// strstr() // Try one example on it
// substr() // Try one example on it
// str_split() // Try one example on it

?> 
