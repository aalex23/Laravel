<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Os;

class OsController extends Controller
{
    public function index()
    {
        return Os::all();
    }
}
