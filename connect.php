<?php 
define('Host','chaiae.me');
define('USER','root';);
define('PASS','0909533094');
define('DATABASE','sbfram');

$con = mysqli_connect(HOST,USER,PASS,DATABASE);
if(con->connect_error){

    die("ไม่สามารถติดต่อฐานข้อมูลได้ error:" . $con->connect_error);

}
else{
    mysqli_set_charset($con, "utf8");

}

?>