<?php


class Cart {

    public int $quantité ;

    public float $prixtotal;

    public function __construct(int $quantité, float $prixtotal) {

        $this->quantité = $quantité;
        
        $this->prixtotal = $prixtotal;


    }

    public function getTotalPrice():float {

        return $this->prixtotal;

}
    public function setTotalPrice(float $price)  {

      $this ->prixtotal = $price;

}
    public function discount(float $discount)  {

      $this ->prixtotal -= $this-> prixtotal * ($discount/100);

}





}