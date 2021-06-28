<?php 
class Prodotti {
    public $name;
    public $model;
    public $price;
    public $qty;
    public $weight;
    function __construct(string $name, string $model, int $price, int $qty, string $weight)
    {
        $this->name = $name;
        $this->model = $model;
        $this->price = $price;
        $this->qty = $qty;
        $this->weight = $weight;
    }
}
$prodotti = [
    $tv = new Prodotti('Samsung', 'Lorem ipsum dolor', 599.99, 1, '20.1 kg'),
    $cell = new Prodotti ('I-Phone', 'Lorem ipsum dolor', 899.99, 1, '194 g'),
    $pc = new Prodotti('Acer', 'Aspire', 548.77, 1, '1.8 kg'),
    $scarpe = new Prodotti ('Icerberg', 'Kakkoi', 215.99, 2, 'nd'),
];

var_dump($prodotti);


class Utenti extends Prodotti {
    
    function __construct(string $name, string $model,  int $price, int $qty, bool $premium)
       {
           parent::__construct($name, $model, $price, $qty, $premium);
           $this->premium = $premium;
           if ($premium = true){
               $this->price -= $price * 10 / 100;
           }else{
               $this->price = $price;
           }
    }
    public $name;
    public $premium;
    
}
$users = [
    $gino = new Utenti ('Gino', 'X', 50.00, 2, true),
    $mario = new Utenti ('Mario', 'Y', 200, 2, false),
];
var_dump($users);


/* class Utenti extends Prodotti {
    function __construct(string $name, string $model, int $price, int $qty, string $weight, $price)
    {
        parent::__construct(string $name, string $model, int $price, int $qty, string $weight),
        $this->price = $price;
    }
}   
 */



?>