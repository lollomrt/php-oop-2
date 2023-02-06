<?php
    include __DIR__.'./models/categoria.php';
    include __DIR__.'./models/prodotti.php';
    

    $prodotto_1 = new prodotti ('immagine1', 'titolo1', 'prezzo1', new categoria ('immagineCane', 'testospecie'))
?>