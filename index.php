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
$prodotti = [
    $tv = new Prodotti('Samsung', 'Lorem ipsum dolor', 599.99, 1, '20.1 kg'),
    $cell = new Prodotti ('I-Phone', 'Lorem ipsum dolor', 899.99, 1, '194 g'),
    $pc = new Prodotti('Acer', 'Aspire', 548.77, 1, '1.8 kg'),
    $scarpe = new Prodotti ('Icerberg', 'Kakkoi', 215.99, 2, 'nd'),
];

var_dump($prodotti);


class User {
    protected $name;
    protected $lastname;
    protected $email;
    protected $username;
    protected $password;
    public function __construct (string $name, string $lastname, string $email, string $username, string $password){
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    public function insertCreditCard($cc)
    {
        return $cc;
    }
}
class PremiumUser extends User{
    protected $isPremium = true;
    protected $discount;
    public function discount()
    {
       $this->discount = 20;
       return $this->discount;
    }
    public function isPremium()
    {
        return $this->premium;
    }
}
class CreditCard{
    protected $number;
    protected $expDate;
    protected $ccv;
    public $bool;

    public function __construct($number, $expDate, $ccv,bool $bool)
    {
        $this->number = $number;
        $this->expDate = $expDate;
        $this->ccv = $ccv;
        $this->bool = $bool;
        if ($this->bool == true){
            return 'pagamento effettuato';
        }   
    }
}
$card = new CreditCard(1234567890, '12/05/22', 123, true);

$users = [
    
    new User('Federico', 'Pieri', 'email@test.com', 'fedearn', '1234'),
    new User('Carlo', 'Burzi', 'emai123l@test.com', 'Carloburz', '1234'),
    new User('Giacomo', 'Pena', '123email@test.com', 'giacomopena', '1234'),
    new PremiumUser('Maura', 'Stacchini', 'e223mail@test.com', 'maurastacch', '1234')

];
/*   */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
</head>
<body>
    <?php 
    foreach ($prodotti as $product) : ?>
    <h1><?= $product->name;?></h1>
    <p><?= $product->model;?></p>
    <p><?= $product->price;?>$</p>

    <?php endforeach; ?>

   <?php 
    foreach ($users as $user) :?>
    
    <h2>Ciao<?= $user[0]->name;?></h2>
    <p><?=  $user->insertCreditCard($card)?></p>
    <p>Hai diritto ad un <?= $user[3]->discount();?> di sconto</p>
   <?php endforeach; ?>
</body>
</html>