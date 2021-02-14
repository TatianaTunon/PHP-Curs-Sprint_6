<html>
<head>
  <title>Ejercicios</title>
</head>
<body>
	<h1>Sprint 6-Nivell 1</h1>
	<h2>Ejercicio 1: Función resta</h2>
  <?php
  function resta($num1, $num2){
  return $num1 - $num2;
}
  echo "La resta es $resultado" .resta(20, 11);
 ?>

	<h2>Ejercio 2: Lógica</h2>
  <?php
 $numero = 45;
if ($numero%2==0){
    echo "Tu edad es par";
}
else{
    echo "Tu edad es impar";
}
?>

	<h2>Ejercio 3: Lógica encapsulada en una función</h2>
  <?php
function parell_o_senar($numero){
  if($numero % 2 == 0){
    return ('PAR');
  }
  else{
    return ('IMPAR');
  }
}
echo parell_o_senar (23);
?>
	<h2>Ejercio 4:Bucle que compti fins a 10</h2>
<?php
$num = 1;
while ($num <= 10){
echo "$num, ";
$num++;
}

?>
</body>


</html>