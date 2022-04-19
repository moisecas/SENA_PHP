<?php

class operaciones {
    public static function sumar($num1, $num2){
        $suma = $num1 + $num2;
        return $suma; 
    }
    public static function restar($num1, $num2){
        $resta = $num1 - $num2;
        return $resta; 
    }
    public static function multiplicar($num1, $num2){
        $multiplica = $num1 * $num2;
        return $multiplica; 
    }
    public static function dividir($num1, $num2){
        $divide = $num1 / $num2;
        if($num2==0){
            return "la división por cero no esta definida";
        }else {
            return divide; 
        }
        
        
    }
}





?>