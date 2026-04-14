<?php

// PDO = php data object 
$host = "localhost";  //the path of database using pdo class
$username="root";
$password=null;
try{
    $conn=new PDO("mysql:host=$host; dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connect done";


}
catch(PDOException $err){
    echo "connect failed $err->getMessage()";
}

echo "<br>";
$result = $conn->query("select * from students");
foreach($result as $value){
    echo $value['name']."<br>";
}

// practice 
// while($row= $result->fetch(PDO::FETCH_NUM)){
//     print_r($row);
// }

// $getStudent = $conn->prepare("select city from students");
// $getStudent->execute();
// $students = $getStudent->fetchAll();

// // print_r($students);
// foreach($students as $x){
//     echo $x['city']."<br>";
// }

?>