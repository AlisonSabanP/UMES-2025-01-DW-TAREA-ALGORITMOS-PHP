<h2>Números Primos</h2>
<?php 
for ($num = 1; $num <1000; $num++){
    $contadorDivisores = 0;
    for ($i = 1; $i <= $num; $i++){
        if ($num % $i == 0){
            $contadorDivisores++;
        }
    }
    if ($contadorDivisores == 2){
        echo $num. "  ";
    }

}
?>

<h2>triangulo asteriscos</h2>
<?php
$tamanio = 5;
for ($i = 1; $i <= $tamanio-1; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}
for ($i =1 ; $i <= 1; $i++){
    for ($j = 1; $j <= $tamanio; $j++){
        echo "+";
    }
    echo "<br>";
}
for ($i = $tamanio-1; $i >= 1; $i--){
    for ($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}
?>


