<?php
    include __DIR__.'./models/categoria.php';
    include __DIR__.'./models/prodotto.php';
    include __DIR__.'./models/gioco.php';
    include __DIR__.'./models/cibo.php';
    include __DIR__.'./models/accessorio.php';

    

    $prodotto_1 = new cibo ('immagine1', 'Royal Canin Mini Adult', '43,99€', new categoria ('fa-solid fa-dog', 'cane'), '545g', ['prosciutto', 'riso']);
    $prodotto_2 = new cibo ('immagine1', 'halmo nature olistic aintenance medium large tonno e riso', '44,99€', new categoria ('fa-solid fa-dog', 'cane'), '600g', ['manzo', 'cereali']);
    $prodotto_3 = new cibo ('immagine1', 'halmo nature cat daily lattina', '34,99€', new categoria ('fa-solid fa-cat', 'gatto'), '400g', ['tonno', 'pollo', 'prosciutto']);
    $prodotto_4 = new cibo ('immagine1', 'mangime per pesci guppy in fiocchi', '2,95€', new categoria ('fa-solid fa-fish', 'pesce'), '30g', ['pesci e sottoprodotti dei pesci', 'cereali', 'lieviti', 'alghe']);
    $prodotto_5 = new accessorio ('immagine2', 'voliera wilma in legno', '184,99€', new categoria ('fa-solid fa-dove', 'uccello'), 'legno', 'M: L 83 x P 67 x H 153 cm');
    $prodotto_6 = new accessorio ('immagine2', 'cartucce filtranti per filtro easyCrystal', '2,29€', new categoria ('fa-solid fa-fish', 'fish'), 'materiale espanso', 'ND');
    $prodotto_7 = new gioco ('immagine1', 'kong classic', '13,49€', new categoria ('fa-solid fa-dog', 'cane'), 'galleggia e rimbalza', '8,5 cm x 10 cm');
    $prodotto_8 = new gioco ('immagine1', 'topini di peluche trixie', '4,99€', new categoria ('fa-solid fa-cat', 'gatto'), 'morbido con codina in corda', '8,5 cm x 10 cm');

    $prodotti = [$prodotto_1, $prodotto_2, $prodotto_3, $prodotto_4, $prodotto_5, $prodotto_6, $prodotto_7, $prodotto_8]


?>