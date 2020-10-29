<?php namespace Desafio;

class InteiroException extends \Exception {
    
}

function intdiv($a, $b) {
    if($b == 0) {
        throw new \DivisionByZeroError();
    }

    if($a % $b > 0) {
        throw new InteiroException();
    }
    
    return $a / $b;
}