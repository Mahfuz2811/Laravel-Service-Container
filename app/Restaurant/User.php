<?php

namespace App\Restaurant;

class User
{
    protected $order;

    public function __construct(OrderBurger $orderBurger)
    {
        $this->order = $orderBurger;
    }

    public function setQuantity($quantity)
    {
        $this->order->set($quantity);
    }

    public function getTotalPrice()
    {
        return $this->order->calculatePrice();
    }
}