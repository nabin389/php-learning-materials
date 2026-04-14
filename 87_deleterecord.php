<?php
include(".\84_config.php");
$students = $conn->prepare("select * from students");
$students->execute();
$result = $students->fetchAll();
// print_r($result);

// third part 
if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    // echo $id;
    $students = $conn->prepare("delete from students where id= '$id'");
    if($students->execute()){
        echo "<br>record deleted<br>";
    }else{
        echo "<br>record not deleted<br>";

    }


}
// second part 
echo "<table border='1'>";
foreach($result as $student){
    // echo "hello world";
    echo "<tr>
    <td>".$student['name']."</td>
    <td>".$student['course']."</td>
    <td>".$student['batch']."</td>
    <td>".$student['year']."</td>
    <td>".$student['city']."</td>
    <td><form method ='post'><button name=delete value=".$student['id'].">Delete</button></form></td>
    <td><a href='.\88_updatedata.php?id=".$student['id']."'>edit</a></td>
    </tr>";
}
echo "</table>";
?>