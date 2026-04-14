<?php
echo "here included<br>";
// include("./52_forTestingHelloworld.php");

for($i=0; $i<10; $i++){
    // include("./52_forTestingHelloworld.php"); //include multiple times
    include_once("./52_forTestingHelloworld.php"); //include only one time same file load only one time

    echo "<br>";
}

four functions
include() //give warning if name becomes incorrect
include_once()
require()
require_once() //gives fatal error if name becomes incorrect
?>