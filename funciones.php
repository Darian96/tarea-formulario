<?php 

function pValor($porcentaje , $valor)
{
	$total = ($porcentaje/100)* $valor;
	return $total;
}
function sumaP($porcentaje,$valor){
	$total = ($valor + ($porcentaje/100)*$valor);
	return $total;
}
function restaP($porcentaje,$valor){
	$total = ($valor - ($porcentaje/100)*$valor);
	return $total;
}
 ?>
