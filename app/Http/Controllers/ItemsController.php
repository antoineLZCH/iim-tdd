<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{

    public function index()
    {
        return Item::all();
    }

    public function store(Request $request)
    {
        Item::create($request->all());
    }
}
