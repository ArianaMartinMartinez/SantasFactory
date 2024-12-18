<?php

namespace Database\Seeders;

use App\Models\Kid;
use App\Models\Toy;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // AGE 3 TOYS
        Toy::factory()->create([
            'name' => 'Teddy Bear',
            'photo' => '/img/toys/teddybear.jpg',
            'description' => 'A cute Teddy Bear',
            'min_age' => 3
        ]);
        Toy::factory()->create([
            'name' => 'Sports Car',
            'photo' => '/img/toys/car.jpg',
            'description' => 'A cool sports car',
            'min_age' => 3
        ]);
        Toy::factory()->create([
            'name' => 'Doll',
            'photo' => '/img/toys/hatdoll.jpg',
            'description' => 'A doll with a stylist hat',
            'min_age' => 3
        ]);
        Toy::factory()->create([
            'name' => 'Telephone',
            'photo' => '/img/toys/telephone.webp',
            'description' => 'A telephone for gossiping with friends',
            'min_age' => 3
        ]);
        Toy::factory()->create([
            'name' => 'Train',
            'photo' => '/img/toys/train.avif',
            'description' => 'A pretty cool train',
            'min_age' => 3
        ]);
        // AGE 7 TOYS
        Toy::factory()->create([
            'name' => 'Blocky Boat',
            'photo' => '/img/toys/boatblocks.jpg',
            'description' => 'An amazing boat made of blocks',
            'min_age' => 7
        ]);
        Toy::factory()->create([
            'name' => 'Bracelet Kit',
            'photo' => '/img/toys/braceletset.jpg',
            'description' => 'A bracelet kit to make with friends',
            'min_age' => 7
        ]);
        Toy::factory()->create([
            'name' => 'Dinotrack',
            'photo' => '/img/toys/dinotrack.jpg',
            'description' => 'A cool dino-looking track for your cars',
            'min_age' => 7
        ]);
        Toy::factory()->create([
            'name' => 'Furby',
            'photo' => '/img/toys/furby.webp',
            'description' => 'Absolutely not a creepy toy',
            'min_age' => 7
        ]);
        Toy::factory()->create([
            'name' => 'Carrot Slime',
            'photo' => '/img/toys/slime.jpg',
            'description' => 'A delicious carrot slime',
            'min_age' => 7
        ]);
        //AGE 12 TOYS
        Toy::factory()->create([
            'name' => 'Board Games Kit',
            'photo' => '/img/toys/boardgame.jpg',
            'description' => 'A practical board game kit with plenty of games',
            'min_age' => 12
        ]);
        Toy::factory()->create([
            'name' => 'Cards Against Humanity',
            'photo' => '/img/toys/cah.webp',
            'description' => 'A harmless and jokeful game (Family Edition)',
            'min_age' => 12
        ]);
        Toy::factory()->create([
            'name' => 'Scratch Book',
            'photo' => '/img/toys/scratchbook.webp',
            'description' => 'A fun and colorful scratch book',
            'min_age' => 12
        ]);
        Toy::factory()->create([
            'name' => 'Table tennis set',
            'photo' => '/img/toys/tabletennis.webp',
            'description' => 'A mobile table tennis set',
            'min_age' => 12
        ]);
        Toy::factory()->create([
            'name' => 'Uno Flex',
            'photo' => '/img/toys/unoflex.jpg',
            'description' => 'A new version of your favorite UNO game',
            'min_age' => 12
        ]);

        //KIDS
        Kid::factory()->create([
            'name' => 'Curro',
            'surname' => 'Ramírez',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528054/Toys/ohi4apj4stfncklbxtxz.png',
            'age' => 6,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Martina',
            'surname' => 'López',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528054/Toys/dxflwm8okefxhmx8f5xu.png',
            'age' => 3,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Dario',
            'surname' => 'Torres',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/v2xmxydxyoq9zools02d.png',
            'age' => 12,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Ainara',
            'surname' => 'Martínez',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/tsgbxef6mrem0og3wotl.png',
            'age' => 15,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Mohamed',
            'surname' => 'González',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/bquc3dxqclys3pdf4kv0.png',
            'age' => 8,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Paula',
            'surname' => 'Castillo',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/dlapksb0ruprc6uemyij.png',
            'age' => 18,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Anabel',
            'surname' => 'Galeote',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/vnqj83vjefzukht76rga.png',
            'age' => 10,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Sofia',
            'surname' => 'Perez',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/fqv2jzz6wve4mhfwfonr.png',
            'age' => 7,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Naira',
            'surname' => 'Vergara',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/rh8gsunmsoy4wcakfk3k.png',
            'age' => 13,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Turro',
            'surname' => 'Cruz',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528054/Toys/yzc4tnisfcrl3tcgo1dq.png',
            'age' => 9,
            'behaviour' => false,
        ]);

        Kid::factory()->create([
            'name' => 'Sol',
            'surname' => 'Moreno',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/eq3c895ekaym1zteiexc.png',
            'age' => 1,
            'behaviour' => false,
        ]);

        Kid::factory()->create([
            'name' => 'Gabriel ',
            'surname' => 'Navarro',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/jozlnrmrnuzo5groidtq.png',
            'age' => 16,
            'behaviour' => true,
        ]);

        Kid::factory()->create([
            'name' => 'Sara',
            'surname' => 'Fernández',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/wgqixe7kkwkooj1ngp5u.png',
            'age' => 4,
            'behaviour' => true,
        ]);

        Kid::factory()->create([
            'name' => 'Laura',
            'surname' => 'Peña',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/loxzc5ac9ejpxuxlutq5.png',
            'age' => 0,
            'behaviour' => true,
        ]);

        Kid::factory()->create([
            'name' => 'Pablo',
            'surname' => 'Soto',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/u8setelsfsgvdsfxggqm.png',
            'age' => 18,
            'behaviour' => false,
        ]);

        Kid::factory()->create([
            'name' => 'Curro',
            'surname' => 'Ramírez',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528054/Toys/ohi4apj4stfncklbxtxz.png',
            'age' => 6,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Martina',
            'surname' => 'López',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528054/Toys/dxflwm8okefxhmx8f5xu.png',
            'age' => 3,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Dario',
            'surname' => 'Torres',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/v2xmxydxyoq9zools02d.png',
            'age' => 12,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Ainara',
            'surname' => 'Martínez',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/tsgbxef6mrem0og3wotl.png',
            'age' => 15,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Mohamed',
            'surname' => 'González',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/bquc3dxqclys3pdf4kv0.png',
            'age' => 8,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Paula',
            'surname' => 'Castillo',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/dlapksb0ruprc6uemyij.png',
            'age' => 18,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Anabel',
            'surname' => 'Galeote',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/vnqj83vjefzukht76rga.png',
            'age' => 10,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Sofia',
            'surname' => 'Perez',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/fqv2jzz6wve4mhfwfonr.png',
            'age' => 7,
            'behaviour' => true,
        ]);
        
        Kid::factory()->create([
            'name' => 'Naira',
            'surname' => 'Vergara',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/rh8gsunmsoy4wcakfk3k.png',
            'age' => 13,
            'behaviour' => false,
        ]);
        
        Kid::factory()->create([
            'name' => 'Turro',
            'surname' => 'Cruz',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528054/Toys/yzc4tnisfcrl3tcgo1dq.png',
            'age' => 9,
            'behaviour' => false,
        ]);

        Kid::factory()->create([
            'name' => 'Sol',
            'surname' => 'Moreno',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/eq3c895ekaym1zteiexc.png',
            'age' => 1,
            'behaviour' => false,
        ]);

        Kid::factory()->create([
            'name' => 'Gabriel ',
            'surname' => 'Navarro',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/jozlnrmrnuzo5groidtq.png',
            'age' => 16,
            'behaviour' => true,
        ]);

        Kid::factory()->create([
            'name' => 'Sara',
            'surname' => 'Fernández',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/wgqixe7kkwkooj1ngp5u.png',
            'age' => 4,
            'behaviour' => true,
        ]);

        Kid::factory()->create([
            'name' => 'Laura',
            'surname' => 'Peña',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/loxzc5ac9ejpxuxlutq5.png',
            'age' => 0,
            'behaviour' => true,
        ]);

        Kid::factory()->create([
            'name' => 'Pablo',
            'surname' => 'Soto',
            'photo' => 'https://res.cloudinary.com/albertokz/image/upload/v1734528053/Toys/u8setelsfsgvdsfxggqm.png',
            'age' => 18,
            'behaviour' => false,
        ]);
        
    }
}
