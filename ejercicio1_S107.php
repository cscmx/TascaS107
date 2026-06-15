<?php
/*Un cas clàssic de situació que ens pot generar una excepció seria dividir un nombre per 0.
Fes un programa que en el que es pugui produir aquesta situació i gestiona aquest error amb una sentència try-catch.*/

$number = (int)readline("Enter a number: ");
$divisor = (int)readline ("Enter a divisor: ");

function makeAnewDivision (int $a,int $b): float {

    if ($b === 0){
        throw new Exception ("Divisor cannot be 0");
    }
    return $a / $b;

}

try {

    $result = makeAnewDivision($number,$divisor);
    echo $result;
        
} catch (Exception $e){
    
    echo "Error: ". $e->getMessage().PHP_EOL;
    
} 



?>