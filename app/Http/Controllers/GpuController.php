<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gpu;

class GpuController extends Controller
{
    public function index()
    {
        return Gpu::all();
    }

    public function show($id)
    {
        return Gpu::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Gpu::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $gpu = Gpu::findOrFail($id);
        $gpu->update($request->all());
        return $gpu;
    }

    public function destroy($id)
    {
        $gpu = Gpu::findOrFail($id);
        $gpu->delete();
        return 204;
    }
}
