<?php
    class gioco extends prodotto {
        public $caratteristiche;
        public $dimensioni;

        public function __construct($_immagine, $_titolo, $_prezzo, categoria $_categoria, $_caratteristiche, $__dimensioni){
            parent:: __construct($_immagine, $_titolo, $_prezzo, $_categoria);
            $this->caratteristiche = $_caratteristiche;
            $this->dimensioni = $__dimensioni;
        }
    }
?>