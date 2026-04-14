<?php
$users = [
    // ["anil", "25","noida"]; //multidimentional array
    ["name"=>"anil", "age"=>"25", "city"=>"noida"],
    ["name"=>"sam", "age"=>"25", "city"=>"gurfaon"],
    ["name"=>"anil", "age"=>"25", "city"=>"delhi"], 
    ["name"=>"anil", "age"=>"25", "city"=>"noida"] 
];
// print_r($users);
echo "<br>";
// need nested loop of foreach 
foreach($users as $user){
    foreach($user as $data){
        echo $data;
        echo " ";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

// if key is also needed 
foreach($users as $user){
    foreach($user as $key=>$item){
        // echo $key." is ".$item.", ";
        // or
        echo "$key is $item";
        echo "<br>";
    }
    echo "<br>";
}
    echo "<br>";
    echo "<br>";
    echo "<br>";
echo "for higer level";
    echo "<br>";
    echo "<br>";


// for this type of question 
// note for how much level that much foreach us used 
$persons = [
    // ["anil", "25","noida"]; //multidimentional array
    ["name"=>"anil", "age"=>"25", "city"=>"noida", "skills"=>['js','node']],
    ["name"=>"sam", "age"=>"25", "city"=>"gurfaon","skills"=>['js','node']],
    ["name"=>"anil", "age"=>"25", "city"=>"delhi","skills"=>['js','node']], 
    ["name"=>"anil", "age"=>"25", "city"=>"noida","skills"=>['js','node']] 
];

foreach($persons as $person){

echo $person['name']." ";
echo $person['age']." ";
echo $person['city']." ";
    foreach($person as $data){
        if(is_array($data)){
            foreach($data as $item){
                echo $item. " ";
            }
        }
        // echo $data;
        echo " ";
    }
    echo "<br>";
}
?>