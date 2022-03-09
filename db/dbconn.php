<?php
define("DB_HOST","localhost");
define("DB_USER","daveecok_exshare");
define("DB_PASS","moni37230559moni");
define("DB_NAME","daveecok_exshare");


date_default_timezone_set('Africa/Nairobi');


$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$conn){
    die("hey db not connected");
}
?>
