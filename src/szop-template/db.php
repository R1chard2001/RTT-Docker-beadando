<?php
// adatbáziskapcsolat beállításai és segítő változója
// beállításokat egyénileg módosítani
$host="szop-mysql-server";
$port=3306;
$socket="";
$user="szopUser";
$password="szopPassword";
$dbname="szop_database";



$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ("Connect failed: ".mysqli_connect_error());
    
if ($con->connect_errno > 0) {
    printf("Connect failed: %s\n", $con->connect_error);
    exit();
}

?>