<?php

namespace App\Classes;

use Illuminate\Support\Facades\Session;
use App\Product;

class Cart
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;

        session($this->name);
    }

    public function destroyCart()
    {
        //flush session
    }
}