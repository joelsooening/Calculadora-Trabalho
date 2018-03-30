<?php
function validar($val1, $val2){
    return is_numeric($val1) && is_numeric($val2);
}
function somar($val1, $val2){
    return $val1+$val2;
}
function subtrair($val1, $val2){
    return $val1-$val2;
}
function multiplicar($val1, $val2){
    return $val1*$val2;
}
function dividir($val1, $val2){
    return $val1/$val2;
}
if(isset($_POST['val1']) && isset($_POST['val2']) && isset($_POST['operacao'])){
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $op = $_POST['operacao'];  
    
    if(validar($val1, $val2)) {
        switch ($op) {
            case 'somar':
                echo(somar($val1, $val2));
                break;
            case 'subtrair':
                echo(subtrair($val1, $val2));
                break;
            case 'multiplicar':
                echo(multiplicar($val1, $val2));
                break;
            case 'dividir':
                echo(dividir($val1, $val2));
                break;
        }
    }else{
        echo('Valor inválido');
    }
}
?>