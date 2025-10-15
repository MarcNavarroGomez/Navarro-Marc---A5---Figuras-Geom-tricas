<?php
require_once 'FiguraGeometrica.php';

class Rectangulo extends FiguraGeometrica {
    public $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct("Rectángulo", $lado1);
        $this->lado2 = $lado2;
    }

    public function __destruct() {}

    public function getLado2() { return $this->lado2; }
    public function setLado2($lado2) { $this->lado2 = $lado2; }

    public function calcularArea() {
        // área = base * altura
        return $this->lado1 * $this->lado2;
    }

    public function calcularPerimetro() {
        // perímetro = 2 * (base + altura)
        return 2 * ($this->lado1 + $this->lado2);
    }

    public function __toString() {
        return "Tipo: $this->tipoFigura<br>" .
               "Base: $this->lado1<br>" .
               "Altura: $this->lado2<br>";
    }
}
