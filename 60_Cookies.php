<?php
setcookie("fruit", "apple", time()+(86400));
setcookie("color", "red", time()+(86400));

if(isset($_COOKIE['fruit'])){
    // print_r($_COOKIE); //it show all the cookie
    echo "<br>";
    echo "Current cookie is ".$_COOKIE['fruit'];
}else{
    echo "no cookie set ";
}

echo "<br>";
if(isset($_COOKIE['color'])){
    echo "Current color is ".$_COOKIE['color'];
}else{
    echo "no color set";
}
?>

<!-- practice by me -->
<?php
echo "<br>";
//set cookie
setcookie("subject","web");

// settion value 
echo $_COOKIE['subject'];

// displaying value 
setcookie("subject",null);

// echo $_COOKIE['subject']; //this gives error this is correct 

?>