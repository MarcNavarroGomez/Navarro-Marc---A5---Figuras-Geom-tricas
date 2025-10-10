<?php
class FiguraGeometrica {
    public $tipoFigura;
    // Solo un lado porque no todas las formas van a necesitar tener 2 lados, ya se definira en las formas lo que necesiten
    public $lado1;

    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    public function __destruct() {
        // Destructor
    }

    public function getTipoFigura(){ 
        return $this->tipoFigura; 
    }
    public function setTipoFigura($tipo){ 
        $this->tipoFigura = $tipo; 
    }

    public function getLado1(){
        return $this->lado1; 
    }
    public function setLado1($lado){
        $this->lado1 = $lado; 
    }
    // La defino aqui vacia, para usarla con los hijos dependiendo de la figura hacer una u otra operacion
    // public function calcularArea();
}
