<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function singleProduct()
    {
        return view('frontend.product.single_product');
    }
}
