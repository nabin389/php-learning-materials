<?php
$users = ["anil", "noida", "anil@email.com"];
$users = ["anil", "same", "peter", "anil@email.com"];


// most important note lop in any php works only it reaches to the actual value not on other 
// other work can happen like count 
$users = [
    [1, "anil", "noide", "anil@test.com"],
    [2, "sam", "delhi", "sam@test.com"],
    [3, "peter", "gurgau", "peter@test.com"],
];


for($i=0; $i<count($users); $i++){
    echo $i;
    echo "<br>";
    // echo $users['$i']; cannot print because not reached to data 
    // print_r($users[$i]);
    for($j=0; $j<count($users[$i]); $j++){
        echo "<br>";
        echo $users[$i][$j];
    }

}
echo "<br>";
echo "<br>";


echo "Hello world";
foreach($users as $key=>$data){
    echo "<br>";
    echo "$key";  //only key can give outside value but not five actual value
    echo "<br>";  

    echo $data[1]; //only $data show error but $data[1] reaches to actual value
}
echo "<br>";

// echo "<pre>";
// print_r($users);
// echo "<pre>";
// ?>