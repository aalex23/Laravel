<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function index()
    {
        return Wishlist::all();
    }
    public function store(Request $request)
    {
        return Wishlist::create($request->all());
    }
    public function destroy($id)
    {
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();
        return 204;
    }
}
