<?php
    class accessorio extends prodotto {
        public $materiale;
        public $dimensioni;

        public function __construct($_immagine, $_titolo, $_prezzo, categoria $_categoria, $_materiale, $__dimensioni){
            parent:: __construct($_immagine, $_titolo, $_prezzo, $_categoria);
            $this->materiale = $_materiale;
            $this->dimensioni = $__dimensioni;
        }
    }
?>