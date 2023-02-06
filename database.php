<?php
    include __DIR__.'./models/categoria.php';
    include __DIR__.'./models/prodotti.php';
    include __DIR__.'./models/gioco.php';


    $prodotto_1 = new prodotti ('immagine1', 'titolo1', 'prezzo1', new categoria ('immagineCane', 'testospecie'), 'caratteristiche', 'dimensioni')
?>