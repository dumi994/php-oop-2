<?php 
class Prodotti {
    public $name;
    public $model;
    public $price;
    public $qty;
    public $weight;
    public $discount;
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
    function __construct(string $name, string $model, int $price, int $qty, string $weight)
    {
        parent::__construct(string $name, string $model, int $price, int $qty, string $weight),
        $this->price = $price;
    }
}

class Utenti {
    protected $name;
    protected $premium;
    
    function __construct(string $name, bool $premium)
    {
        $this->name = $name;
        $this->premium = $premium;
    }

}
$users = [
    $gino = new Utenti ('Gino', true)
]






?>