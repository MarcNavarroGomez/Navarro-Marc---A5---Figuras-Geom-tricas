<?php
require_once 'FiguraGeometrica.php';

class Cuadrado extends FiguraGeometrica {

    public function __construct($lado1) {
        parent::__construct("Cuadrado", $lado1);
    }

    public function __destruct() {}

    public function calcularArea() {
        // área = lado * lado
        return $this->lado1 * $this->lado1;
    }

    public function calcularPerimetro() {
        // perímetro = 4 * lado
        return $this->lado1 * 4;
    }

    public function __toString() {
        return "Tipo: $this->tipoFigura<br>" .
               "Lado: $this->lado1<br>";
    }
}
