 <!-- can write whole html or only form  -->
  <form action="" method="post">
    <input type="text" name="user" placeholder="enter user name">
    <br>
    <br>
    <button name="button" value="set">Set Cookies</button>
    <br>
    <br>
    <button name="button" value="display">Display Cookies</button>
    <br>
    <br>
    <button name="button" value="delete">Delete Cookies</button>

  </form>

  <?php
  echo "<br>";
  if(isset($_POST['button'])){

//   Creatingj Cookie 
  if($_POST['button'] =="set"){
    $val = $_POST['user'];
    setcookie("user",$val);
    echo "<br>Cookie is set<br>";
  }


//   Display cookie 
if($_POST['button'] == 'display'){
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
    }
}

// Delete cookie 
if($_POST['button'] == 'delete'){
    if(isset($_COOKIE['user'])){
        setcookie("user", null, -1); //-1 is the time
    }
}
//   this is my method 
//   if($_POST['button'] == "display"){
//     echo "<br>";
//     // print_r($_COOKIE);
//     // next method
//     echo $_COOKIE['user'];
//   }
  }
  ?>