<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marque;

class MarqueController extends Controller
{
    public function index()
    {
        return Marque::all();
    }
}
