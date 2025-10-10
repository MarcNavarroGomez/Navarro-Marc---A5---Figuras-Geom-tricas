<?php
require_once 'FiguraGeometrica.php';

class Triangulo extends FiguraGeometrica {
    public $lado2;
    public $lado3;
    public $altura;

    public function __construct($lado1, $altura) {
        parent::__construct("Triángulo", $lado1);
        $this->lado2 = $lado1; 
        $this->lado3 = $lado1;
        $this->altura = $altura;
    }

    public function __destruct() {}

    public function getAltura() { return $this->altura; }
    public function setAltura($altura) { $this->altura = $altura; }

    public function calcularArea() {
        // area: base * altura
        return $this->lado1 * $this->altura;
    }

    public function calcularPerimetro() {
        // equilátero → los tres lados iguales
        return $this->lado1 * 3;
    }

    public function __toString() {
        return "Tipo: $this->tipoFigura<br>" .
               "Base: $this->lado1<br>" .
               "Altura: $this->altura<br>" .
               "Lados iguales: $this->lado2 y $this->lado3<br>";
    }
}
