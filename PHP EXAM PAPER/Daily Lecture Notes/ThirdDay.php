 <?php
class student{
    public $student_id;
    public $student_name;

    // Parameterised Constructor
    public function __construct($student_id,$student_name){
        $this->student_id = $student_id; // $student_id = 25;
        $this->student_name = $student_name; // $student_name = "Kelvin";
    }

    // Function Define  // Method Define
    public function display(){
        return "Name Of the student is : $this->student_name and id of the student is: $this->student_id"."<br>";
    }
}

$student = new student(25,"Kelvin");
echo $student->display();


// =================== String Advance Function ===================
echo '=================== String Advance Function ==================='.'</br>';
echo "------ Implode Function ------"."</br>";
$array = ["Jeremy","Carol","Emma","Justus","Kelvin","Shelly"]; // Array to String
$karr = implode(' ',$array);

echo $karr."</br></br>";
echo "------ Explode Function ------"."</br>";
$kaar = explode(' ',$karr); // String to Array
echo "<pre>";
print_r($kaar);


echo "------ md5 Function ------"."</br>";
$pass = "Senza@2022";

echo md5($pass)."</br>"; // In live project used in form for password security
echo "------ sha1 Function ------"."</br>";
echo sha1($pass)."</br>"; // In live project used in form for password security but at the moment not in use because it's also decrypted
echo "------ bin2hex Function ------"."</br>";
$binary = "Patel";
$hexa = bin2hex($binary); 
echo $hexa."</br>"; // Convert binary to hexadecimal
echo "------ hex2bin Function ------"."</br>";
echo hex2bin($hexa)."</br>"; // Convert hexadecimal to binary

echo "------ trim Functions ------"."</br>";
$trim = "One Two Three One";
echo trim($trim,"Oe")."</br>"; // Remove Characters from both side // Two Three
echo ltrim($trim,"One")."</br>"; // Remove Character From Left Side // Two Three One
echo rtrim($trim,"One")."</br>"; // Remove Character From Right Side // One Two Three

echo "------ strstr Functions ------"."</br>";
echo strstr("Good Evening Evening!!","Evening!!")."</br>"; // Find the first occurance of word and give o/p rest of the string

echo "------ substr Functions ------"."</br>";
echo substr("Good Morning!!",5,2)."</br>"; // Morning

echo "------ str_split Functions ------"."</br>";
$kqq = str_split($trim);
print_r($kqq); die(); // One Two Three One  