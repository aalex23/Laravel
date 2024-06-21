<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cpu;

class CpuController extends Controller
{
    public function index()
    {
        return Cpu::all();
    }

    public function show($id)
    {
        return Cpu::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Cpu::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $cpu = Cpu::findOrFail($id);
        $cpu->update($request->all());
        return $cpu;
    }

    public function destroy($id)
    {
        $cpu = Cpu::findOrFail($id);
        $cpu->delete();
        return 204;
    }
}