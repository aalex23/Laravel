<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    public function index()
    {
        return Laptop::all();
    }

    public function show($id)
    {
        return Laptop::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Laptop::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->update($request->all());
        return $laptop;
    }

    public function destroy($id)
    {
        $laptop = Laptop::findOrFail($id);
        $laptop->delete();
        return 204;
    }
}
