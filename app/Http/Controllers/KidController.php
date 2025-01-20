<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KidController extends Controller
{

    public function index()
    {
        $kids = Kid::get();
        return view('kids', compact('kids'));
    }

    public function create()
    {
        return view('createKidForm');
    }

    public function store(Request $request)
    {
        $kids = Kid::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'country' => $request->country,
            'behaviour' => $request->behaviour,
        ]);
        $kids->save();

        return Redirect::to(route('kidshome'));
    }

    public function show(string $id)
    {
        $kids = Kid::find($id);

        return view('showKid', compact('kids'));
    }

    public function edit(string $id)
    {
        $kid = Kid::find($id);

        return view('editKidForm', compact('kid'));
    }


    public function update(Request $request, string $id)
    {
        $kids = Kid::find($id);

        $kids -> update([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'country' => $request->country,
            'behaviour' => $request->behaviour,
        ]);

        $kids -> save();
        return Redirect::to(route('kidshome'));
    }


    public function destroy(string $id)
    {
        $kids = Kid::find($id);

        $kids -> delete();
        return Redirect::to(route('kidshome'));
    }
    public function countBehaviour(string $value){
        $kids = Kid::where('behaviour', $value)->count();
        return $kids;
    }
}
