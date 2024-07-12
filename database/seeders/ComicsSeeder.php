<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('comics');

        

       // DB::truncate('comics');

        foreach ($data as $comics_db) {
            $comics = new Comic();
            $comics->title = $comics_db['title'];
            $comics->description = $comics_db['description'];
            $comics->thumb = $comics_db['thumb'];
            $comics->price = $comics_db['price'];
            $comics->series = $comics_db['series'];
            $comics->sale_date = $comics_db['sale_date'];
            $comics->type = $comics_db['type'];
            $comics->artists = $comics_db['artists'];
            $comics->writers = $comics_db['writers'];

            $comics->save();

        }
    }
}
