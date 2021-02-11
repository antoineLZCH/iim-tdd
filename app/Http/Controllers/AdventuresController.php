<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use Illuminate\Http\Request;

class AdventuresController extends Controller
{

    public function index()
    {
        return Adventure::all();
    }

    public function store(Request $request)
    {
        Adventure::create($request->all());
    }
}
