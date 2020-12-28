<?php
echo "QUSTION!1"."<br>";
function year_check($my_year)
{
   if ($my_year % 400 == 0)
      print("It is a leap year");
   if ($my_year % 4 == 0)
      print("It is a leap year");
   else if ($my_year % 100 == 0)
      print("It is not a leap year");
   else
      print("It is not a leap year");
}
$my_year = 2020;
year_check($my_year);
echo "<hr>";
/////////////////////////////////////////////////////////
echo "QUSTION2"."<br>";
function temp($Temp1){
if($Temp1<=20)
echo "We are in winter";
 else {
    echo "The season is summer";
 }
    
}
$Temp1=18;
temp($Temp1);

echo "<hr>";
//////////////////////////////////////////////////////////
echo "QUSTION!3"."<br>";
function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test(1, 2)."<br>";
echo test(3, 2)."<br>";
echo test(2, 2)."<br>"; 
echo "<hr>";
/////////////////////////////////////////////////////////
echo "QUSTION4"."<br>";
function test1($n) 
{
     $x = 100;

     if ($n > $x)
     {
       return ($n - $x)*3;
     }
   return $x - $n;
}
echo test1(55)."<br>";
echo test1(103)."<br>";
echo test1(100)."<br>";  
 
echo "<hr>";
///////////////////////////////////////////////////////////
echo "QUSTION5"."<br>";
function test2($x, $y) 
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}

var_dump(test2(30, 0));
var_dump( test2(25, 5));
var_dump( test2(20, 30));
var_dump(test2(20, 25)); 
echo "<hr>";
////////////////////////////////////////////////////////
echo "QUSTION6"."<br>";
function test3($x) 
{
   if(abs($x - 100) <= 10 || abs($x - 200) <= 10)
            return true;
     return false;
}

var_dump(test3(103));        
var_dump(test3(90));
var_dump(test3(89));  
echo "<hr>";
/////////////////////////////////////////////
echo "QUSTION7"."<br>";
function test4($n) 
{
   return $n % 3 == 0 || $n % 7 == 0;
}

var_dump(test4(3));
var_dump(test4(14));
var_dump(test4(12));
var_dump(test4(37));
echo "<hr>";
/////////////////////////////////////////////////////
echo "QUSTION9"."<br>";
function test5($s, $n) 
{
   return substr($s,0,$n).substr($s,$n+1,strlen($s)-$n);
}

echo test5("Hello", 1)."<br>";
echo test5("Hello", 0)."<br>";
echo test5("Hello", 4)."<br>";
echo "<hr>";
///////////////////////////////////////////////////////
echo "QUSTION10"."<br>";

function test6($x, $y) 
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
}

var_dump(test6(100, 199));
var_dump(test6(250, 300));
var_dump(test6(105, 190));
echo "<hr>";
//////////////////////////////////////////////////////
echo "QUSTION11"."<br>";

function test7($x, $y) 
{
   return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
}

var_dump(test7(20, 84));
var_dump(test7(14, 50));
var_dump(test7(11, 45));
var_dump(test7(25, 40));
echo "<hr>";
///////////////////////////////////////////////////////
echo "QUSTION12"."<br>";

function test8($x, $y, $z) 
{
  $max = max($x, max($y, $z));
  return $max;
}

echo test8(1, 2, 3)."<br>";
echo test8(1, 3, 2)."<br>";
echo test8(1, 1, 1)."<br>";
echo test8(1, 2, 2)."<br>";
echo "<hr>";
///////////////////////////////////////////////////////
echo "QUSTION13"."<br>";

function test9($x, $y) 
{
   $n = 100;
   $val = abs($x - $n);
   $val2 = abs($y - $n);
   return $val == $val2 ? 0 : ($val < $val2 ? $x : $y);
}

echo test9(78, 95)."<br>";
echo test9(95, 95)."<br>";
echo test9(99, 70)."<br>";
echo "<hr>";
/////////////////////////////////////////////////////
echo "QUSTION14"."<br>";

function test0($x, $y)
{
   return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
 }

var_dump(test0(5, 4));
var_dump(test0(4, 3));
var_dump(test0(1, 4));
echo "<hr>";
?>