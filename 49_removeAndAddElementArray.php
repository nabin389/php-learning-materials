<?php
// not multiple adding is possible at a time 
// but multiple removing at a time is not possible 
// both from last 


$users = ["anil", "sam", "bhasker", "praveen"];
// push 
array_push($users,"Peter"); //for one element adding at last
array_push($users,"Tony","bruce"); //for adding multiple element in array 

// pop 
array_pop($users);

// remoe from last  
// by this possible 
array_splice($users, -2);


print_r($users);
?>