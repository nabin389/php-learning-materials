<?php


// echo "hello world";
// basic steps of session 

// 1. Start session :
// session_start();

// 2.Set session vlaue :
// $_SESSION['user'] = "Nabin"; 

// 3.Display session value 
// echo $_SESSION['user'];

// 4.Delete session 
// session_destroy(); 


// now, simple example 
session_start();

// setting values 
$_SESSION['name'] = "Nabin Subedi";
// $_SESSION['address'] = "Waling";  can do multiple times and stored in multiple variable

//displaying value
echo $_SESSION['name'];

// destroying session 
session_unset();  //it empties the $_SESSION array
session_destroy();  //delete session from server
// echo $_SESSION['name'];

// now checking  
if(isset($_SESSION['name'])){
    echo "<br>";
    echo $_SESSION['name'];
    echo "<br>";
    echo $_SESSION['address'];
    echo "<br>";

}else{
    echo "<br>Session value not found<br>";
}



// note session have no fixed parameter like cookie 
// can give multiple like this 
// $_SESSION['name'] = "Nabin";
// $_SESSION['age'] = 22;
// $_SESSION['city'] = "Bhairahawa";
// $_SESSION['course'] = "BSc CSIT";
// this is one session created by session_start() and multiple values are running 
// we can print values usin loops 

// extra 
// this is also possible 
// $_SESSION['user'] = [
//     "name" => "Nabin",
//     "age" => 22,
//     "city" => "Kathmandu"
// ];
// echo $_SESSION['user']['name'];
?>



<!-- practicing by me  -->
<?php
session_start();

$_SESSION['Subject'] = "WEB";
echo "<br>";

echo $_SESSION['Subject'];
echo "<br>";

// session_unset();
// session_destroy();
echo $_SESSION['Subject'];



?>