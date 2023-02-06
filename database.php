<?php
    include __DIR__.'./models/categoria.php';
    include __DIR__.'./models/prodotto.php';
    include __DIR__.'./models/gioco.php';
    include __DIR__.'./models/cibo.php';
    include __DIR__.'./models/accessorio.php';

    $prodotto_1 = new gioco ('immagine1', 'titolo1', 'prezzo1', new categoria ('immagineCane', 'testospecie'), 'caratteristiche', 'dimensioni');
    $prodotto_2 = new cibo ('immagine2', 'titolo2', 'prezzo2', new categoria ('immagineCane', 'testospecie'), 'peso netto', ['olio', 'sale', 'pepe']);
    $prodotto_3 = new accessorio ('immagine2', 'titolo2', 'prezzo2', new categoria ('immagineCane', 'testospecie'), 'materiale', ['h5', 'l2', 'pd']);

    
?>