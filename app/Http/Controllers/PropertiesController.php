<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PropertiesController extends Controller
{
    public function create(){
        return view('properties.create');
    }

    public function store(Request $request):RedirectResponse
    {
       $input = $request->except('_token');       
      
       
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

       Property::create($validated);



       return redirect('/dashboard')->with('message',"Property succesfully registered");

    }

    public function Read(Request $request){
        $q = property::query();

        if ($request->has('prop')){
            $prop = $request->input('prop');
            $q->where('name', 'like', '%' . $prop . '%');
            $q->orWhere('address', 'like', '%' . $prop . '%');
            $q->orWhere('city', 'like', '%' . $prop . '%');
            $q->orWhere('state', 'like', '%' . $prop . '%');
            $q->orWhere('district', 'like', '%' . $prop . '%');
            $q->orWhere('latitude', 'like', '%' . $prop . '%');
            $q->orWhere('longitude', 'like', '%' . $prop . '%');
            $q->where('location', 'like', '%' . $prop . '%');

        }

        $properties = $q->paginate($request->get('limit', 10));
        

        return view('properties.Read', compact('properties'));
    }

   

}
