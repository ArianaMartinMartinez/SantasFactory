<?php

namespace App\Http\Controllers\Api;

use App\Models\Kid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class KidController extends Controller
{

    public function index()
    {
        $kids = Kid::all();
        return response()->json($kids, 200);
    }

    public function store(Request $request)
    {
        $kid = Kid::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'country' => $request->country,
            'behaviour' => $request->behaviour,
        ]);
        $kid->save();

        return response()->json($kid, 200);
    }

    public function show(string $id)
    {
        $kid = Kid::find($id);

        return response()->json($kid, 200);
    }

    public function update(Request $request, string $id)
    {
        $kid = Kid::find($id);
        $kid ->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'photo' => $request->photo,
            'age' => $request->age,
            'country' => $request->country,
            'behaviour' => $request->behaviour,
        ]);

        $kid -> save();

        return response()->json($kid, 200);
    }

    public function destroy(string $id)
    {
        $kid = Kid::find($id);
        $kid -> delete();
    }
}
