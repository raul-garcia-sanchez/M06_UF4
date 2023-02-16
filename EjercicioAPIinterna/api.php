
<?php

function numeros_primos_menores_que($n) {
    $primos = array();
    for ($i = 2; $i < $n; $i++) {
        $es_primo = true;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $es_primo = false;
                break;
            }
        }
        if ($es_primo) {
            $primos[] = $i;
        }
    }
    return json_encode($primos);
}


echo numeros_primos_menores_que($_GET['numero']);

?>