<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function allType(){

        $types = PropertyType::latest()->get();
        return view('backend.type.all_type', compact('types'));

    } // end method

    public function addType(){

    } // end method




}
