<?php
    class cibo extends prodotto {
        public $peso_netto;
        public $ingredienti;

        public function __construct($_immagine, $_titolo, $_prezzo, categoria $_categoria, $_peso_netto, $__ingredienti){
            parent:: __construct($_immagine, $_titolo, $_prezzo, $_categoria);
            $this->peso_netto = $_peso_netto;
            $this->ingredienti = $__ingredienti;
        }
    }
?>