<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function Illuminate\Broadcasting\via;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.layout.home');
    }

    public function manRegister()
    {
        return view('frontend.layout.man.register');
    }

    public  function manCollection()
    {
        return view('frontend.layout.man.index');
    }

    public function manLogin()
    {
        return view('frontend.layout.man.login');
    }

    public function manForgetPassword()
    {
        return view('frontend.layout.man.forget_password');
    }

    public  function womanCollection()
    {
        return view('frontend.layout.women.index');
    }

    public function trendingProduct()
    {
        return view('frontend.product.index');

    }

    public function allStyleProduct()
    {
        return view('frontend.product.all-style-product');
    }

    public function product()
    {
        return view('frontend.product.product');
    }

    public function productDesign()
    {
        return view('frontend.product.own_design');
    }

    public function chatWithUs()
    {
        return view('frontend.product.chat_with_us');
    }

    public function profile()
    {
        return view('frontend.profile.view');
    }

    public function editProfile()
    {
        return view('frontend.profile.edit');
    }
}
