<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class Editcontroller extends Controller
{
   public function edit($id){

    $property = Property::findOrFail($id);
    return view('properties.edit',compact('property'));
   }

   public function update(Request $request , $id):RedirectResponse
   {
      

      $validated = $request->validate([
         'name' => ['required','max:25' ],
         'address' => ['required','max:25'],
         'location' => ['required ','max:25'],
         'city' => ['required ','max:50'],
         'district' => ['required ','min:4','max:25'],
         'state' => ['required ','min:4','max:25'],
         'latitude' => ['required ','min:4','max:25'],
         'longitude' => ['required ','min:4','max:25'],
 
        ]);

        $property = property::find($id);

        $property->update();

        return redirect ('/properties')->with('message', "Your Property Has Been Succesfully Edited");


   }

}

