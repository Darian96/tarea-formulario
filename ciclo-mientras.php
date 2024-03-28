<?php 
$n = 1;
while ($n < 11) {
    echo  $n;
    $n++;
}
echo "<br>";

 $v = 10;

  while ($v > 0) {
      echo $v;
      $v--;
  }
  echo "<br>";

  $d = 0;
  while ($d<100) {
      $d = $d + 5;
      echo $d;
      echo '<br>';
  }
    echo "<br>";

    $persona = ["darian","andres","juana"];

  #  array_push($persona, "marcos");

    $mascotas = [
      "aves" => "paloma",
      "roedor" => "rata",
      "insecto" => "araña"
    ];

  foreach ($mascotas as $indice => $animal) {
       echo $animal ," posicion ", $indice;
       echo "<br>";
  }

  $mascotas["peces"] = "pez payaso";
  
    var_dump($persona);

    #elimnar datos de un arreglo
    unset($mascotas["roedor"]);
    var_dump($mascotas);

    $index = array_search("juana", $persona);
    var_dump($index);


    $bebidas = [
     ["tinto","blanco","rosado"],
     ["mineral", "gasificada","agua destilada"],
     ["coca cola", "pepsi","fanta"]
    ];

    echo "<br>";



    $ind = count($bebidas);
    for ($i = 0; $i < $ind ; ++$i) {
      unset($bebidas[$i][2]);
      echo "<br>";
    };
    echo "<br>";

    var_dump($bebidas);

/*  
    $bebidas = [
     vino => ["tinto","blanco","rosado"],
     agua =>["mineral", "gasificada","agua destilada"],
     gaseosa=> ["coca cola", "pepsi","fanta"]
    ];

    echo $bebidas["vinos"][2];
    foreach ($bebidas  as $key => $valor) {
      foreach ($valor as $v1) {
        echo "la $key : ", $v1;
        echo '<br>';
      }
    }
    */
 ?>