<?php

namespace App\Restaurant;

class OrderBurger
{
    protected $logger, $price, $quantity;

    public function __construct(Logger $logger)
    {
        $this->price = 500;
        $this->logger = $logger;
    }

    public function set($quantity)
    {
        $this->quantity = $quantity;
    }

    public function calculatePrice()
    {
        $totalPrice = $this->quantity * $this->price;
        $this->logger->log("$totalPrice Quantity: $this->quantity and Price: $this->price");
        return $totalPrice;
    }
}