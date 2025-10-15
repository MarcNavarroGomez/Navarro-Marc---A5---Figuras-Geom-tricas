<?php
require_once 'FiguraGeometrica.php';

class Circulo extends FiguraGeometrica {

    public function __construct($radio) {
        parent::__construct("Círculo", $radio);
    }

    public function __destruct() {}

    public function calcularArea() {
        // área = π * radio^2
        return 3.1416 * ($this->lado1 * $this->lado1);
    }

    public function calcularPerimetro() {
        // perímetro = 2 * π * radio
        return 2 * 3.1416 * $this->lado1;
    }

    public function __toString() {
        return "Tipo: $this->tipoFigura<br>" .
               "Radio: $this->lado1<br>";
    }
}
