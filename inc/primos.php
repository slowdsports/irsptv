<?php
function esPrimo($numero)
{
    for ($i = 2; $i < $numero; $i++) {
        if (($numero % $i) == 0) {
            // No es primo 🙁
            return true;
        }
    }
    // Es primo 🙂
    return false;
}
