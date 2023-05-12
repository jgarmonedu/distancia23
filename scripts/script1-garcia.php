<?php
/**
 * Script que realiza las operaciones básicas de cálculo matemático: Suma, resta, producto, división
 * @author Javier García Montero
 * @version 1.0.1
 */

/**
 * Esta función realiza la suma de dos números pasados como parámetros
 * @version 1.0.1
 * @link https://es.wikipedia.org/wiki/Adici%C3%B3n_(matem%C3%A1tica)
 * @param integer $num1 primer sumando
 * @param integer $num2 segundo sumando
 * @return integer resultado de la operación de suma entre los dos parámetros introducidos
 */
function suma ($num1 ,$num2) {
    return $num1 + $num2;
}

/**
 * Esta función realiza la resta de dos números pasados como parámetros
 * @version 1.0.1
 * @link https://es.wikipedia.org/wiki/Adici%C3%B3n_(matem%C3%A1tica)
 * @param integer $num1 primer numero
 * @param integer $num2 segundo numero a restar
 * @return integer resultado de la operación de resta entre los dos parámetros introducidos
 */
function resta ($num1, $num2){
    return $num1 - $num2;
}

/**
 * Esta función realiza el producto de dos números pasados como parámetros
 * @version 1.0.1
 * @link https://es.wikipedia.org/wiki/Multiplicaci%C3%B3n
 * @param integer $num1 primer producto
 * @param integer $num2 segundo producto
 * @return integer resultado de la operación de producto entre los dos parámetros introducidos
 */
function producto($num1, $num2) {
    return $num1 * $num2;
}

/**
 * Esta función realiza la división de dos números pasados como parámetros
 * @version 1.0.1
 * @link https://es.wikipedia.org/wiki/Divisi%C3%B3n_(matem%C3%A1tica)
 * @param integer $num1 dividendo
 * @param integer $num2 divisor
 * @return integer resultado de la operación de división entre los dos parámetros introducidos
 */
function division($num1,$num2) {
    return $num1 / $num2;
}

/**
 * Esta función devuelve un saludo de bienvenida del nombre pasado como parámetro
 * @version 1.0.1
 * @param string $nombre es el nombre de la persona a la que saludamos
 * @return string Saludo de la persona indicada como parámetro
 */
function saludo($nombre){
    return "Bienvenido ".$nombre;
}


echo saludo("Javier");
echo "<br/> La diferencia entre 30 y 10 es ".resta(30,10)." .";
echo "<br/> La suma entre 30 y 10 es ".suma(30,10)." .";
echo "<br/> El producto entre 30 y 10 es ". producto(30,10)." .";
echo "<br/> La división entre 30 y 10 es ".division(30,10)." .";
echo "<br/> Hasta luego";
?>
