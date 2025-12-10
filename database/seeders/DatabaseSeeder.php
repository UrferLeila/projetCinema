<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Film;
use App\Models\Seance;
use App\Models\Reservation;
use App\Models\Prix;
use App\Models\Salle;
use App\Models\Siege;
use App\Models\ReservationSiege;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        User::factory()->createMany([
            [
                'name'  => 'Alice',
                'email' => 'alice@ceff.ch',
                'password' => '1234',
            ],

            [
                'name'  => 'Bob',
                'email' => 'bob@ceff.ch',
                'password' => '1234',
            ],
        ]);

        Film::factory()->createMany([
            [
                'titre'  => 'Twilight',
                'auteur' => 'Stephenie Meyer',
                'image'  => 'https://themonitormmc.com/wp-content/uploads/2021/01/twilight.jpg',
            ],
            [
                'titre'  => "Harry Potter",
                'auteur' => 'JK Rowling',
                'image'  => 'https://media.posterstore.com/site_images/68631db092c536b9cc92b06f_775081888_WB0101-5.jpg',
            ],
            [
                'titre'  => 'Jurassic world Rebith',
                'auteur' => 'Gareth Edwards',
                'image'  => 'https://m.media-amazon.com/images/S/pv-target-images/414f6b00ca574fdc273a693daffd721abc71c5ee49b28253853916ddbd550a69.jpg',
            ],
            [
                'titre'  => 'Avatar',
                'auteur' => 'James Cameron',
                'image'  => 'https://tse2.mm.bing.net/th/id/OIP.59n-h-SQ_q3TqBkgXbsEeAHaLH?rs=1&pid=ImgDetMain&o=7&rm=3',
            ],
            [
                'titre'  => 'Les gardien de la galaxie',
                'auteur' => 'Jsp',
                'image'  => 'https://fr.web.img5.acsta.net/pictures/14/08/04/15/09/405662.jpg',
            ],
        ]);

        Salle::factory()->create([
        
            'name'  => 'salle pricipal', 

        ]);

        Seance::factory()->createMany([
            [
                'date'    => '2026-01-04',
                'heure'   => '11:30',
                'salle_id' => 1,
                'film_id' => 1,
            ],
            [
                'date'    => '2026-01-04',
                'heure'   => '15:30',
                'salle_id' => 1,
                'film_id' => 1,
            ],
            [
                'date'    => '2026-01-06',
                'heure'   => '18:00',
                'salle_id' => 1,
                'film_id' => 1,
            ],

            [
                'date'    => '2026-02-15',
                'heure'   => '13:30',
                'salle_id' => 1,
                'film_id' => 2,
            ],
            [
                'date'    => '2026-02-15',
                'heure'   => '17:00',
                'salle_id' => 1,
                'film_id' => 2,
            ],
            [
                'date'    => '2026-02-17',
                'heure'   => '20:00',
                'salle_id' => 1,
                'film_id' => 2,
            ],

            [
                'date'    => '2026-03-10',
                'heure'   => '12:45',
                'salle_id' => 1,
                'film_id' => 3,
            ],
            [
                'date'    => '2026-03-10',
                'heure'   => '16:15',
                'salle_id' => 1,
                'film_id' => 3,
            ],
            [
                'date'    => '2026-03-12',
                'heure'   => '19:30',
                'salle_id' => 1,
                'film_id' => 3,
            ],

            [
                'date'    => '2026-04-02',
                'heure'   => '10:00',
                'salle_id' => 1,
                'film_id' => 4,
            ],
            [
                'date'    => '2026-04-02',
                'heure'   => '14:00',
                'salle_id' => 1,
                'film_id' => 4,
            ],
            [
                'date'    => '2026-04-04',
                'heure'   => '18:45',
                'salle_id' => 1,
                'film_id' => 4,
            ],

            [
                'date'    => '2026-05-21',
                'heure'   => '11:00',
                'salle_id' => 1,
                'film_id' => 5,
            ],
            [
                'date'    => '2026-05-21',
                'heure'   => '15:00',
                'salle_id' => 1,
                'film_id' => 5,
            ],
            [
                'date'    => '2026-05-23',
                'heure'   => '20:30',
                'salle_id' => 1,
                'film_id' => 5,
            ],
        ]);  

        Reservation::factory()->createMany([
            [
                'user_id'  => 1,
                'seance_id'  => 1, 
            ],
            [
                'user_id'  => 1,
                'seance_id'  => 2, 
            ],
            [
                'user_id'  => 2,
                'seance_id'  => 3, 
            ],
        ]);

        Prix::truncate();

        Prix::factory()->createMany([
            ['type' => 'normal', 'prix' => 10.25],
            ['type' => 'vip', 'prix' => 15.50],
        ]);

        Siege::factory()->createMany([
            ['nom' => 'a1', 'prix_type' => 'normal', 'salle_id' => 1],
            ['nom' => 'a2', 'prix_type' => 'normal', 'salle_id' => 1],
            ['nom' => 'b1', 'prix_type' => 'vip', 'salle_id' => 1],
            ['nom' => 'b2', 'prix_type' => 'vip', 'salle_id' => 1],
        ]); 

        ReservationSiege::factory()->createMany([
            ['siege_nom' => 'a1', 'reservation_id' => 1],
            ['siege_nom' => 'a2', 'reservation_id' => 2],
            ['siege_nom' => 'b1', 'reservation_id' => 3],
           
        ]);    
    }
}
