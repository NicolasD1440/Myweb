<?php
include 'mysql.php';
$oMysql = new MySQL();

$response = "";
$rq = $_POST['rq'];

if ($rq == 1) {
    $response = $oMysql->getUsuarios();
} else if ($rq == 2) {
    $response = $oMysql->getPlatos();
} else if ($rq == 3) {
    $response = $oMysql->getVendidos();
} else if ($rq == 4) {
    $response = $oMysql->getDatosGrafica();
}

echo $response;