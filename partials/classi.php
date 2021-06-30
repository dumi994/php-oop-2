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
    public function getName(){
        return $this->name;
    }
    public function insertCreditCard($cc)
    {
        return 'Pagamento effettuato';
    }
    
    
}
class PremiumUser extends User{
    protected $isPremium;
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

    public function __construct($number, $expDate, $ccv)
    {
        $this->number = $number;
        $this->expDate = $expDate;
        $this->ccv = $ccv;
    }
}
?>