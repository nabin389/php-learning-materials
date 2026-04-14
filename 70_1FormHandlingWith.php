<?php
echo "this is the result of form input:<br>";
if(isset($_POST['name'])){
    echo "<br>";
    echo "User name is: ". $_POST['name'] ."<br>";
    echo "User email is: ". $_POST['email'] ."<br>";
    echo "User password is: ". $_POST['password'] ."<br>";
    // echo "User skills is: ";
    // $skill = $_POST['skills'];
    // foreach($skill as $value){
    //     echo $value. ", ";
    // }
    // echo "<br>";
    // or you can do this 
    echo "User skills is: ". implode(", ",$_POST['skills'])."<br>";
    echo "User gender is: ". $_POST['gender'] ."<br>";
    echo "User city is: ". $_POST['city'] ."<br>";
    echo "User bio is: ". $_POST['bio'] ."<br>";



    // ehco "user name is:".$_POST['name']."<br>";
}

// print_r($_POST);
?>