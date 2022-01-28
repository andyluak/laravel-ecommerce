<?php

namespace App\Http\Controllers\Admin\Tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientiController extends Controller
{
    public function index()
    {
        return view('admin.clienti.index');
    }
}
