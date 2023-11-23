<?php
define("db_host", "localhost");
define("db_user", "root");
define("db_pass", "");
define("db_name", "avito_v2");

$connect = mysqli_connect(db_host, db_user, db_pass, db_name);

if($connect == false){
    die("Could not connect to Database !  . $connect->connect_errno");
}

$sql = "CREATE TABLE IF NOT EXISTS user(
            id INT PRIMARY KEY AUTO_INCREMENT,
            first_name VARCHAR(50),
            last_name VARCHAR(50),
            email VARCHAR(250),
            password VARCHAR(250)
    )";

$result = $connect->query($sql);

if(!$result){
    die("could not create table ! . $connect->errno");

}

?>