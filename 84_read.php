<?php
echo "hello word<br>";
include("./84_config.php");

$getStudents=$conn->prepare("SELECT * FROM `students`");
$getStudents->execute();
$students = $getStudents->fetchAll();

echo "<pre>";

print_r($students);


echo "<table border=1>";
echo "<tr>
<th>Name</th> <th>Course</th>
<th>Batch</th>
<th>City</th>
<th>Year</th>
</tr>";
foreach($students as $student){
    echo "<tr>
        <td>" . $student['name']."</td>
        <td>" . $student['course']."</td>
        <td>" . $student['batch']."</td>
        <td>" . $student['city']."</td>
        <td>" . $student['year']."</td>
    </tr>";


    // echo $student['name'];
    // echo "<br>";
    // echo $student['id'];
}


echo "<br>code executed<br>";
?>