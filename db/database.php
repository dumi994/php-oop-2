<?php 
$prodotti = [
    $tv = new Prodotti('Samsung', 'Lorem ipsum dolor', 599.99, 1, '20.1 kg'),
    $cell = new Prodotti ('I-Phone', 'Lorem ipsum dolor', 899.99, 1, '194 g'),
    $pc = new Prodotti('Acer', 'Aspire', 548.77, 1, '1.8 kg'),
    $scarpe = new Prodotti ('Icerberg', 'Kakkoi', 215.99, 2, 'nd'),
];
$users = [
    
    new User('Carlo', 'Burzi', 'emai123l@test.com', 'Carloburz', '1234'),
    new PremiumUser('Federico', 'Pieri', 'email@test.com', 'fedearn', '1234'),
    new User('Maura', 'Stacchini', 'e223mail@test.com', 'maurastacch', '1234'),
    new User('Giacomo', 'Pena', '123email@test.com', 'giacomopena', '1234'),

];

new CreditCard(1234567890, '12/05/22', 123);
?>