<?php
	require 'Modelo_Grafico.php';

	$MG = new Modelo_Grafico();
	$consulta = $MG -> TraerDatosGrafLin();
	echo json_encode($consulta);
?>