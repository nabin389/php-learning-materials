<?php
$userDetails = [
    "name"=>"anil",
    "age"=>25,
    "city"=>"delhi",
    "email"=>"abc@gmail.com",
    "state"=>"Gandadi"
];
// echo "<br>";
// echo $userDetails["name"];
// echo "<br>";
// echo $userDetails["age"];

foreach($userDetails as $data){
    echo $data;
echo "<br>";
}

echo "<br>";
echo "<br>";

foreach($userDetails as $key => $data){
    echo $key;
    echo " : ";
    echo $data;
echo "<br>";
}
?>