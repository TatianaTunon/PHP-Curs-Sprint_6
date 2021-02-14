<html>
<head>
  <title>Ejercicios</title>
</head>
<body>
<h1>Sprint 6-Nivell 3</h1>
<h2>Ejercicio 1: Bucle años Juegos Olímpicos</h2>
<?php

$year = 1960;
do {
echo "- $year </br>";
$year+=4; 
} 
while ($year <= 2016);

?>

<h2>Ejercicio 2: Programa que permeti afegir càlculs a un total de compres</h2>
<?php

$preu_xocolata = 1;
$preu_xiclets = 0.50;
$preu_carmels = 1.50; 

// Función xocolata
function subtotal_xoco ($cantidad){
global $preu_xocolata;
return $cantidad * $preu_xocolata;
}

// Función xiclets
function subtotal_xiclets ($cantidad){
global $preu_xiclets;
return $cantidad * $preu_xiclets;
}

// Función carmels
function subtotal_carmels ($cantidad){
global $preu_carmels;
return $cantidad * $preu_carmels;
}

// Función condicional
function sumame ($cantidad, $tipo){
  switch ($tipo) {
    case  "xocolata":
      return subtotal_xoco ($cantidad); break;
    case "xiclets":
      return subtotal_xiclets ($cantidad); break;
    case "carmels":
      return subtotal_carmels ($cantidad); break;
  }
}

// Función que toma los valores de las anteriores para hacer el total
function total()
{
  $val1 = sumame (2, "xocolata") + sumame (1,"xiclets") + sumame(1,"carmels");
  echo "TOTAL COMPRA: " . ($val1) . " €";
}
total ();
?>

<h2>Ejercicio 3: Criba d'Eratóstenes </h2>
<?php

function erastostenes ($max=100){
//Lista de primos, por defecto todos
for($i=2;$i<$max;$i++)
{
  $num[$i]=true;
}

for ($n=2;$n<$max;$n++)
{
  //Identifica como no primos los múltiplos
  if ($num[$n])
  {
    for ($i=$n*$n;$i<$max;$i+=$n)
    { $num[$i] = false; } // Empezando por el primer cuadrado señala como falsos los números múltiplos
  }
}

//Lista final de los primos hasta el número máximo que hemos puesto
echo "Criba d'Eratóstenes: ";
for ($n = 2; $n < $max; $n++)
{
  if ($num[$n])
  {
    echo $n." ";
  }
}
echo "</br>";
}
erastostenes (); //Con el valor po defecto
erastostenes (20); // Con parámetro especificado 

?>
</body>
</html>