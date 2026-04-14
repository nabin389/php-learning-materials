<?php
include(".\84_config.php");
echo "<br>hello world<br>";

// echo $_GET['id'];
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $getStudent=$conn->prepare("select * from students where id='$id'");
    $getStudent->execute();
    $student = $getStudent->fetchAll();
    $name=$student[0]['name'];
    $course=$student[0]['course'];
    $batch=$student[0]['batch'];
    $city=$student[0]['city'];
    $year=$student[0]['year'];
    // print_r($student[0]['name']);
}
?>

<form action="" method="post">
    <input type="text" value="<?php echo $name ?>" name="name">
    <br><br>
    <input type="text" value="<?php echo $course ?>" name="course">
    <br><br>
    <input type="text" value="<?php echo $batch ?>" name="batch">
    <br><br>
    <input type="text" value="<?php echo $city ?>" name="city">
    <br><br>
    <input type="text" value="<?php echo $year ?>" name="year">
    <br><br>
    <button value="<?php echo $id?>" name="update">Update Student data</button>
    <br><br>
</form>

<?php //89
if(isset($_POST['update'])){
   echo $id = $_POST['update'];
  echo  $name = $_POST['name'];
  echo  $course = $_POST['course'];
  echo  $batch = $_POST['batch'];
   echo $city = $_POST['city'];
   echo $year = $_POST['year'];
$updateStudent=$conn->prepare("update students set 
name='$name',
course='$course',
batch='$batch',
city='$city',
year='$year'
 where id ='$id'");
if($updateStudent->execute()){
    header('location:87_deleterecord.php'); //this is used to redirect.
}else{
    echo "updated failed";
}

// echo "update students set 
// name='$name',
// course='$course',
// batch='$batch',
// city='$city',
// year='$year'
//  where id ='$id'";
}
?>