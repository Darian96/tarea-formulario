<?php
$num1 =5;

if ($num1>4){
    echo "es mayor", $num1;
}
echo "<br>";
$miarray =[1,2,3,4];
for ($i=0; $i <=3; $i++) { 
    echo "el indice es $i "," ",$miarray[$i];
    echo "<br>";
}
echo "<br>";
$kilometros = 100;
$velocidadAuto = 40;
$kilometrosRecorridos = $kilometros / $velocidadAuto;
echo "tardar en recorrer $kilometros km ", ($kilometrosRecorridos) , "hs";

$sueldoFijo = 15000;
$comision = 5;
$totalFacturado = 5000;
echo "<br>";
$resultado = $totalFacturado+ (5/100 * $totalFacturado);
$resultadoTotal = $resultado + $sueldoFijo;

echo 'la facturacion total del empeleado es ', $resultadoTotal;
echo "<br>";
$nota1 = 1;
$nota2 =2;
$nota3 = 7;

$notasTotal =  ($nota1 + $nota2 + $nota3) / 3;
echo $notasTotal;
echo "<br>";
$superficietotal = 6;
$metrosCubiertos = 2;

$totalCubiertos = ($metrosCubiertos*(100/$superficietotal));

echo "Metros cubiertos ", $totalCubiertos;
echo "<br>";
$metrosDescubiertos = $superficietotal - $metrosCubiertos;
$pDescubiertos = $metrosDescubiertos * (100 /$superficietotal);
echo "metros descubiertos ",$pDescubiertos;


?>