<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $About = \Cart::getContent();
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();

        return view('layouts.About', compact('About','cartTotal', 'cartCount'));
    }
}