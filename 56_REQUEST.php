<?php
// $_REQUEST is a super global variable 
// both type of data can access 
// all other things are same only the thing that i have to know is this

if($_REQUEST) // can work for both get and post 
foreach($_REQUEST as $data){
    echo $data;
    echo "<br>";
    // note can print like associative like value 
}

?>