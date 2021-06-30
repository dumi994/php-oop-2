<?php
class Prodotti {
    public $name;
    public $model;
    public $price;
    public $qty;
    public $weight;
    function __construct(string $name, string $model, $price, int $qty, string $weight)
    {
        $this->name = $name;
        $this->model = $model;
        $this->price = $price;
        $this->qty = $qty;
        $this->weight = $weight;
    }
    function name(){
        return $this->name;
    }
}

?>
