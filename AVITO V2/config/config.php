<?php
define("db_host", "localhost");
define("db_user", "root");
define("db_pass", "");
define("db_name", "avito_v2");

$connect = mysqli_connect(db_host, db_user, db_pass, db_name);

if($connect == false){
    die("Could not connect to Database !  . $connect->connect_errno");
}

?>