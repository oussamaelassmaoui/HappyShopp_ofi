<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
        $contact = \Cart::getContent();
        $cartTotal = \Cart::getTotal();
        $cartCount = \Cart::getContent()->count();

        return view('layouts.contact', compact('contact','cartTotal', 'cartCount'));
    }
}
