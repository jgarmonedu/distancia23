<?php

/**
 * Clase que realiza las operaciones básicas de cálculo matemático: Suma, resta, producto, división
 * @author Javier García Montero
 * @version 1.0.1
 * @copyright: Common Creatibe (CC-BY-SA)
 * @final
 */

Class Operaciones {

    protected $num1;    // primer operador
    protected $num2;    // segundo operador

    /**
     * Método constructor que instancia el objeto añadiendo valor a los atributos
     * @version 1.0.1
     * @todo Incluir excepción para verificar atributos enteros
     * @param integer $num1
     * @param integer $num2
     */
    public function __construct(int $num1,int $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    /**
     * Método Set que asigna un valor al atributo pasado como parámetro
     * @version 1.0.1
     * @param integer $num1
     */
    public function setNum1(int $num1){
        $this->num1=$num1;
    }

    /**
     * Método Set que asigna un valor al atributo pasado como parámetro
     * @version 1.0.1
     * @param integer $num2
     */
    public function setNum2(int $num2){
        $this->num2=$num2;
    }

    /**
     * Método Get que devuelve el valor al atributo num1
     * @version 1.0.1
     * @return type
     */
    public function getNum1(){
        return $this->num1;
    }

    /**
     * Método Get que devuelve el valor al atributo num2
     * @version 1.0.1
     * @return type
     */
    public function getNum2(){
        return $this->num2;
    }

    /**
     * Método que  realiza la suma de dos números correspondiente a los atributos de la clase
     * @version 1.0.2
     * @since: versión 1.0.1.
     * @return integer Devuelve el resultado de la suma de los atributos de la clase
     */
    public function suma () {
        return $this->getNum1() + $this->getNum2();
    }

    /**
     * Método que  realiza la resta de dos números correspondiente a los atributos de la clase
     * @version 1.0.2
     * @since: versión 1.0.1.
     * @return integer Devuelve el resultado de la resta de los atributos de la clase
     */
    public function resta () {
        return $this->getNum1() - $this->getNum2();
    }

    /**
     * Método que realiza el producto de dos números correspondiente a los atributos de la clase
     * @version 1.0.2
     * @since: versión 1.0.1.
     * @return integer Devuelve el resultado del producto de los atributos de la clase
     */
    public function producto () {
        return $this->getNum1() * $this->getNum2();
    }

    /**
     * Método que realiza la división de dos números correspondiente a los atributos de la clase
     * @version 1.0.2
     * @since: versión 1.0.1.
     * @return double Devuelve el resultado de la división de los atributos de la clase
     */
    public function division () {
        return $this->getNum1() / $this->getNum2();
    }
}

$operaciones = new Operaciones(30,10);
echo "<br/> La diferencia entre ".$operaciones->getNum1()." y ".$operaciones->getNum2()." es ".$operaciones->resta()." .";
echo "<br/> La suma entre ".$operaciones->getNum1()." y ".$operaciones->getNum2()." es ".$operaciones->suma()." .";
echo "<br/> El producto entre ".$operaciones->getNum1()." y ".$operaciones->getNum2()." es ".$operaciones->producto()." .";
echo "<br/> La división entre ".$operaciones->getNum1()." y ".$operaciones->getNum2()." es ".$operaciones->division()." .";
echo "<br/> Hasta luego";
