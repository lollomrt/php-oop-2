<?php
    
    class prodotti {
        public $immagine;
        public $titolo;
        public $prezzo;
        public $categoria;

        public function __construct($_immagine, $_titolo, $_prezzo, categoria $_categoria){
            $this->immagine = $_immagine;
            $this->tiolo = $_titolo;
            $this->prezzo = $_prezzo;
            $this->categoria = $_categoria;
        }
    }
?>