<!-- use of 
 die uses fault,
  exit: it uses c, cpp, php, fault internally
   and return 
differentiate 
pass message 
example 

Note: die and exist use to stop code execution return has two uses 1 stop code execution and 2 can get output from function  -->
<?php
$a = 10;
$b = 20;
echo $a- $b;
echo "<br>";
echo "Function value is: " . test();
echo "<br>";


echo $a+$b;
echo "<br>";
// die; //this also works
// die(); //code stop from here  can give text

echo $a*$b;
echo "<br>";

echo $a/$b;
echo "<br>";
function test(){
    // die(); // it stop complete code execution
    // exit(); //it also stop complete code execution
    return 20;
    }
?>