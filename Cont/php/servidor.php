<?php
include 'mysql.php';
$oMysql = new MySQL();

$response = "";
$rq = $_POST['rq'];

if ($rq == 1) {
    $response = $oMysql->getDatosGrafica();
} else if ($rq == 2) {
    $response = $oMysql->getDatosGrafica2();
} else if ($rq == 3) {
    $response = $oMysql->getDatosGrafica3();
} else if ($rq == 4) {
    $response = $oMysql->getDatosGrafica4();
}

echo $response;