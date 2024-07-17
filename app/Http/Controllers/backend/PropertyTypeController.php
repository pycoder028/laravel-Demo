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

        return view('backend.type.add_type');
    } // end method

    public function storeType(Request $request){

        // Validation
        $request->validate([
            'type_name' => 'required|unique:property_types|max:200',
            'type_icon' => 'required'
        ]);

        PropertyType::insert([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon,
        ]);

        $notification = array(
            'message' => 'Property Type Create Successfully',
            'alert-type' => 'success'
        );
        
        return redirect()->route('all.type')->with($notification);


    } // end method

    
}
