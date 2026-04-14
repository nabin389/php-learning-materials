<?php
echo "this is php login file";
// two uses 
if($_GET){
echo "<br>"; 
echo $_GET['user_name'];
echo "<br>"; 
echo $_GET['user_password'];
}else{
    echo "<br>no data arrives through get";
}

if($_POST){
    echo "<br>";
    echo $_POST['user_name'];
    echo "<br>";
    echo $_POST['user_password'];
    echo "<br>";
}else{
    echo "<br>no data arrives through post";
}
?>