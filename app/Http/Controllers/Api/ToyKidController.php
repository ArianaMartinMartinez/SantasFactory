<?php

namespace App\Http\Controllers\Api;

use Log;
use App\Models\Kid;
use App\Models\Toy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\KidController;


class ToyKidController extends Controller
{
    public function randomToy(){
        $toys = Toy::all();       
        $randomToy = $toys->random();
        return $randomToy;
    }

    public function getKids(){
        $kids = Kid::all();
        return $kids;
    }

    
}
