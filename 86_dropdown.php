<?php
include(".\84_config.php");
$getStudent = $conn->prepare("select id, name from students");
$getStudent->execute();
$studentData=$getStudent->fetchAll();
// print_r($studentData);
echo "<select>";
echo "<option>Select name</option>";
foreach($studentData as $student){
echo "<option value=".$student['id'].">".$student['name']."</option>";
}

echo "</select>";
?>