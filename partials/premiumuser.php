<?php 
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


?>