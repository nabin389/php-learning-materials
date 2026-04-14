<?php
// note: in php outside variable cannot accessed inside the function block even though it is golobal variable
// we need to use global variable-name inside function  
$name = "anil";
function test(){
    // $name = "peter";
    global $name;
    echo "Local: $name";
}
test();
echo "<br>";

display();
function display(){
    global $name;
    $name = "Peter"; //this change global variable
    echo "<br>";
    echo $name;
}
echo "<br>Outside this function :<br>";
echo $name;
?>
