<html>
<head>
  <title>Ejercicios</title>
</head>
<body>
<h1>Sprint 6-Nivell 2</h1>
<h2>Ejercicio 1: Cuenta hasta el 10, de 2 en 2</h2>
<?php

function cuenta_atras (){
  $num=0;
  do {
  echo "$num, ";
  $num+=2; //Aquí se cambia el incremento de la secuencia
  } 
  while ($num <= 10); 
  }
  cuenta_atras ();

?>

<h2>Ejercicio 2: Final de la cuenta parametritzado</h2>
<?php

function cuenta_atras_2($paramet){
  $num = 0;
  do {
  echo "$num, ";
  $num+=2; 
  } 
  while ($num <= $paramet); 
  }
  cuenta_atras_2 (15);

?>

<h2>Ejercicio 3: Valor por defecto</h2>
<?php

function amagatall ($parate = 10, $inicio = 0){ //Valores por defecto si no se especifica lo contratio
  $num = $inicio;
  do {
  echo "$num, ";
  $num+=2; 
  } 
  while ($num <= $parate); 
  }
  echo "Sin parámetro </br>";
  amagatall ();
  echo "</br>";
  echo "</br> Con parámetro final </br>";
  amagatall (5);
  echo "</br>";
  echo "</br> Con parámetro inicio y final</br>";
  amagatall (5,1);

?>
</body>


</html>