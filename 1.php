<?php
//echo"Hello!"; // Comments singleLine // /* */Multiline


//variable
/*
$var1=1; // $-php variable assing // no need to declare datatype // case sensative-- upper && lower different meaning
echo $var1."</br>"; // br -->html tag to show value in different line
$var2=2.5;
echo $var2."</br>";
echo$var1+$var2;
*/


// Variable Scope
//1.Local
//2.Global
//3.Static

/*
// Local Variable-> It is declared inside the function or method and cannot be accessed outside the function and method.
function marks(){
    $marks=100;
    echo"Marks is:".$marks; // . for concatination
}
marks()
*/

/*
// Global Variable-> It is generally declared outside the function and can be accessed through out the program
// Global veriable can be accessed inside the function using global keyword

$edt = "Welcome";  // Global Variable
function edtech()
{
    global $edt;
    echo"Variable which is inside the function:".$edt;
}
edtech();
echo"</br>";

echo"Variable which is outside the function:".$edt;
*/

/*
// Static Variable- static keyword is used before the variable to declare a static variable
// it is declared in local variable

function marks()
{
    static $marks=100;
    $marks++;
    echo"Marks:".$marks;
    echo"</br>";
}
marks();
marks();
marks();
*/
/*
$age=25;
if($age>12)
{
    echo"Valid age";
}
else{
    echo"Not valid age";
}


$age=45;
if($age>15)
{echo"valid age";}
elseif($age<50)
{echo"Invalid age";}
else{echo"Not valid age;"}


$s=15;
switch($s)
{
    case 15:
        echo"Number is 15";
        break;
    case 11:
        echo"Number is Invalid";
        break;
    default:
         echo""Other value;    
}
*/

/*
for($a=0; $a<5; $a++)
{
    echo"$a";
}

$a=0;
while($a<5){echo $a; $a++}


*/

/*
//OPERATORS:
//Artithmatic operator:
 $a=3;
 $b=6;
 echo$a+$b;
 echo$a-$b; 
 echo$a/$b;
 echo$a*$b;
 echo$a%$b;

//Assingment Operator:
$var=$var2;
$var3=$var5;
$var3 += 1;
$var4 -= 2;


$var=10;
$var++;
echo $var;




String:

$string="Heloo! I am ";
echo strlen($string);
echo str_word_count($string);
echo strrev($string);


FUNCTIONS:
function tech()
{
    echo"KAka";
}
tech();  // Function call;

function student($name)
{
    echo"He is a student $name";
}
student("HH");



Call by value:
Actual value will not change even though there is any modification inside function.
Change will be done in local variable;

function tect($b)
{
    $b="GG";
}
$a="FF";
tech($a);
echo $a;  // Actual value will not channge

Call By Reference:
Actulal value is modifoed even if there is any modification inside function;

function tech(&$b)
{
    $b="GG";
}
$a="HH";
tech($a);
echo $a;    // Actual value will cahnge
  
*/


ARRAYS:
$players=array("A", "B", "C");
echo"Players are"."$players[0].", "$players[2].";
echo count($players);

Associative array:

1st way:
$marks=array("JJ"=>"44", "FG"=>"44", "ff"=>"33");

2nd way:
$marks["kk"]="33";
$marks["kk"]="33";
$marks["kk"]="33";

Multidimentional array:

$student = array(array(1,"ff", 77), array(1,"ff", 77), array(1,"ff", 77))
print_r($array)





































































































?>



