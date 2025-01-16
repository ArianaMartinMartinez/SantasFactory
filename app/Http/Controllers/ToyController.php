<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ToyController extends Controller
{

    public function index(Request $request)
    {
        if ($request->action === 'delete'){
            $this->destroy($request->id);
            
            return Redirect::to(route('toyshome'));
        }

        $toys = Toy::get();
        return view('toys', compact('toys'));
    }

    public function create()
    {
        return view('createToyForm');
    }

    public function store(Request $request)
    {
        $toys = Toy::create([
            'name' => $request->name,
            'photo' => $request->photo,
            'description' => $request->description,
            'age_range' => $request->age_range,
        ]);
        $toys->save();

        return Redirect::to(route('toyshome'));
    }

    public function show(string $id)
    {
        $toys = Toy::find($id);

        return view('showToy', compact('toys'));
    }

    public function edit(string $id)
    {
        $toy = Toy::find($id);

        return view('editToyForm', compact('toy'));
    }

    public function update(Request $request, string $id)
    {
        $toys = Toy::find($id);

        $toys -> update([
            'name' => $request->name,
            'photo' => $request->photo,
            'description' => $request->description,
            'age_range' => $request->age_range,
        ]);

        $toys -> save();
        return Redirect::to('toyshome');
    }

    public function destroy(string $id)
    {
        $toys = Toy::find($id);

        $toys -> delete();
    }
}
