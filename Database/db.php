<?php
include __DIR__ . '/../Models/AnimalCategory.php';


$products = [
    new AnimalCategory ('Crocchette per cani', 10, 'https://www.gardenbedettishop.com/14348-large_default/crocchette-per-cani-prolife-sensitive-grain-free-sensitive-manzo-e-patate-adult-mediumlarge-nutrigenomic-10-kg.jpg','dog', new Category('food', 'sack') ),
    new AnimalCategory ('Crocchette per gatti', 8, 'https://www.gardenbedettishop.com/21534-large_default/crocchette-gatti-farmina-vet-life-ultrahypo-feline-2-kg.jpg','cat', new Category('food', 'sack') ),
    new AnimalCategory ('Doggies Ball', 6, 'https://www.gardenbedettishop.com/26115-large_default/giochi-per-cani-doggies-ball-palla-sonora.jpg','dog', new Category('Toy', 'Ball') ),
    new AnimalCategory ('Cuccia per cani', 20, 'https://www.gardenbedettishop.com/16591-large_default/cuccia-per-cani-dandy-f-ferplast.jpg','dog', new Category('Product', ' bed') ),
    new AnimalCategory ('Cuccia per gatti', 15, 'https://www.gardenbedettishop.com/16593-large_default/cuccia-per-cani-queen-50-ferplast.jpg','cat', new Category('product', 'bed') ),
];


?>