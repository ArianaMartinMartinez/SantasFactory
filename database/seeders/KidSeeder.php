<?php

namespace Database\Seeders;

use App\Models\Kid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $child = new Kid();
        $child->name = "Sofía";
        $child->surname = "Ramírez";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528054/Toys/yzc4tnisfcrl3tcgo1dq.png";
        $child->age = 6;
        $child->country = "Argentina";
        $child->behaviour = true;
        $child->save();

        $child = new Kid();
        $child->name = "Mateo";
        $child->surname = "López";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528054/Toys/dxflwm8okefxhmx8f5xu.png";
        $child->age = 3;
        $child->country = "Canadá";
        $child->behaviour = false;
        $child->save();

        $child = new Kid();
        $child->name = "Valentina";
        $child->surname = "Torres";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528054/Toys/ohi4apj4stfncklbxtxz.png";
        $child->age = 12;
        $child->country = "Japón";
        $child->behaviour = false;
        $child->save();

        $child = new Kid();
        $child->name = "Sebastián";
        $child->surname = "Martínez";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/rh8gsunmsoy4wcakfk3k.png";
        $child->age = 15;
        $child->country = "Alemania";
        $child->behaviour = true;
        $child->save();

        $child = new Kid();
        $child->name = "Camila";
        $child->surname = "González";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/tsgbxef6mrem0og3wotl.png";
        $child->age = 8;
        $child->country = "Egipto";
        $child->behaviour = true;
        $child->save();

        $child = new Kid();
        $child->name = "Paula";
        $child->surname = "Hernández";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/dlapksb0ruprc6uemyij.png";
        $child->age = 18;
        $child->country = "Brasil";
        $child->behaviour = false;
        $child->save();

        $child = new Kid();
        $child->name = "Isabella";
        $child->surname = "Pérez";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/loxzc5ac9ejpxuxlutq5.png";
        $child->age = 10;
        $child->country = "Australia";
        $child->behaviour = false;
        $child->save();

        $child = new Kid();
        $child->name = "Emilia";
        $child->surname = "Castro";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/wgqixe7kkwkooj1ngp5u.png";
        $child->age = 7;
        $child->country = "India";
        $child->behaviour = true;
        $child->save();

        $child = new Kid();
        $child->name = "Martina";
        $child->surname = "Rojas";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/v2xmxydxyoq9zools02d.png";
        $child->age = 5;
        $child->country = "España";
        $child->behaviour = false;
        $child->save();

        $child = new Kid();
        $child->name = "Victoria";
        $child->surname = "Silva";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/fqv2jzz6wve4mhfwfonr.png";
        $child->age = 13;
        $child->country = "Sudáfrica";
        $child->behaviour = false;
        $child->save();

        $child = new Kid();
        $child->name = "Daniel";
        $child->surname = "Cruz";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/u8setelsfsgvdsfxggqm.png";
        $child->age = 9;
        $child->country = "México";
        $child->behaviour = false;
        $child->save();

        $child = new Kid();
        $child->name = "Luna";
        $child->surname = "Moreno";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/vnqj83vjefzukht76rga.png";
        $child->age = 1;
        $child->country = "Francia";
        $child->behaviour = false;
        $child->save();

        $child = new Kid();
        $child->name = "Gabriel";
        $child->surname = "Navarro";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/bquc3dxqclys3pdf4kv0.png";
        $child->age = 16;
        $child->country = "Corea del Sur";
        $child->behaviour = true;
        $child->save();

        $child = new Kid();
        $child->name = "Zoe";
        $child->surname = "Fernández";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/jozlnrmrnuzo5groidtq.png";
        $child->age = 4;
        $child->country = "Italia";
        $child->behaviour = true;
        $child->save();

        $child = new Kid();
        $child->name = "Thiago";
        $child->surname = "Méndez";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/eq3c895ekaym1zteiexc.png";
        $child->age = 11;
        $child->country = "Nueva Zelanda";
        $child->behaviour = false;
        $child->save();
    }
}
