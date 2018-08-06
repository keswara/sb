<?php 
header("content-type:text/javascript;charset=utf-8");
define('Host','chaiae.me');
define('USER','root';);
define('PASS','0909533094');
define('DB','sbfram');

$con = mysqli_connect(HOST,USER,PASS,DB);
if($_SERVER['REGUEST_METHOD'] == 'GET'){
    $status = $_GET['status'];
    $con = mysqli_connect(Host, USER, PASS, DB) or die('Unable to Connect');

    mysqli_set_charset($con, utf8);
    $sql ="SELECT * FROM content WHERE status='" . $status ."'";
    $r =mysqli_query($con,$sql);
    $result = array();
    while ($row = mysqli_fetch_array($r)) {

        array_push($result, array("comment" => $row['comment']));
    }
    echo json_decode(array('result' => $result));

    mysqli_close($con);
}

?>