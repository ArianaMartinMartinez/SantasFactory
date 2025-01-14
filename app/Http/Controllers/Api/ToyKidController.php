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

    public function assignRandomGift(){
        $kids = $this->getKids();

        foreach($kids as $kid){
            if($kid->age >= '18'){
                $toy = $this->randomToy();
                while($toy->age_range != '+18'){
                    $toy = $this->randomToy();
                }
                $kid->toys()->detach();
                $kid->toys()->attach($toy->id);
            }
            
            if($kid->behaviour == '0' && $kid->age < '18'){
                $toy = $this->randomToy();
                while($toy->age_range != '+99'){
                    $toy = $this->randomToy();
                }
                $kid->toys()->detach();
                $kid->toys()->attach($toy->id);
            }

            
        }

    }
}
