<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produs;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Produs::all();
        return view('frontend.index', compact('products'));
    }

    public function produse()
    {
        $products = Produs::all();
        return view('frontend.produse.index', compact('products'));
    }

    public function produsview($id)
    {
        $produs = Produs::find($id);
        return view('frontend.produse.produsview', compact('produs'));
    }
}
