<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use App\Models\Toy;
use Illuminate\Http\Request;
use App\Http\Controllers\KidController;

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

    public function attachToy($kid, string $toyId){
        $kid->toys()->detach();
        $kid->toys()->attach($toyId);
    }

    public function bigKidsGift(){
        $toy = $this->randomToy();
        while($toy->age_range != '+18'){
            $toy = $this->randomToy();
        }
        return $toy;
    }

    public function badKidsGift(){
        $toy = $this->randomToy();
            while($toy->age_range != '+99'){
                $toy = $this->randomToy();
            }
        return $toy;
    }

    public function goodKidsGift($kid){
        $toy = $this->randomToy();
        while($toy->age_range == '+18' || $toy->age_range == '+99'){
            $toy = $this->randomToy();
        }
        if($toy->age_range != '+18' || $toy->age_range != '+99'){
            $ageRange = explode('-', $toy->age_range);
            while($ageRange[0] > $kid->age || $ageRange[1] < $kid->age){
                $toy = $this->randomToy();
                $ageRange = explode('-', $toy->age_range);
            }
        }
        return $toy;
    }

    public function assignRandomGift(){
        $kids = $this->getKids();

        foreach($kids as $kid){
            if($kid->age >= '18'){
                $toy = $this->bigKidsGift();
                $this->attachToy($kid, $toy->id);
            }
            
            if($kid->behaviour == '0' && $kid->age < '18'){
                $toy = $this->badKidsGift();
                $this->attachToy($kid, $toy->id);
            }

            if($kid->behaviour == '1' && $kid->age < '18'){
                $firstToy = $this->goodKidsGift($kid);
                $this->attachToy($kid, $firstToy->id);

                $secondToy = $this->goodKidsGift($kid);
                while($secondToy->id == $firstToy->id){
                    $secondToy = $this->goodKidsGift($kid);
                }
                $kid->toys()->attach($secondToy);
            }
        }

        return Redirect::to(route('kidsWithToys'));
    }

    public function index(){
        $kids = Kid::with('toys')->get();
        return view('kidsWithToys', compact('kids'));
    }
}
