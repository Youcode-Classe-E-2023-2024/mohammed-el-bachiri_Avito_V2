<?php
define("db_host", "localhost");
define("db_user", "root");
define("db_pass", "");
define("db_name", "avito_v2");

$connect = mysqli_connect(db_host, db_user, db_pass, db_name);

if($connect == false){
    die("Could not connect to Database !"  . mysqli_connect_error());
}
$sql1 = "
CREATE TABLE IF NOT EXISTS Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL
); ";

$sql2 = "
CREATE TABLE IF NOT EXISTS Products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    price INT NOT NULL
);";

$rsl1 = $connect->query($sql1);
$rsl2 = $connect->query($sql2);
if (!$rsl1 || !$rsl2) {
    die("could not create table ! . $connect->errno");
}

?>