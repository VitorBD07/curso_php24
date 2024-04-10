$notas = [100, 50, 20 ,10, 5, 2];
$valor = 572;
$QDNotas = [];




foreach ($notas as $nota)
{ 

    if ($valor >= $nota) {
  $quantidade = floor ($valor/ $nota); 
  $valor_descontar = $quantidade * $nota;
  $valor -= $valor_descontar;
  $QDNotas[$nota] = $quantidade;
    }
}

foreach ($QDNotas as $nota => $quantidade){
    echo "tem {$quantidade} notas de {$nota}<br>";
}
