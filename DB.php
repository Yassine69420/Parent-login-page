<?php
$username = "Yassine";
$bdname = "signuptestlogin";
$password = "yassine2003" ;
$servername = "localhost" ;
try {
    $conn = new mysqli($servername, $username, $password , $bdname);
} catch (mysqli_sql_exception) {
  echo "could not connect <br>" ;
}

?>
