<?php

namespace App\Http\Controllers;

use App\Restaurant\User;

class OrderController extends Controller
{
    public function buy()
    {
        $user = new User();
        $user->setQuantity(4);
        dd($user->getTotalPrice());
    }
}
