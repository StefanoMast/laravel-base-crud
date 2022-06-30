<?php

use App\Comics;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_list = config('comics');

        foreach($comics_list as $comics) {
            $new_comics = new Comics();
            $new_comics->title = $comics['title'];
            $new_comics->description = $comics['description'];
            $new_comics->price = $comics['price'];
            $new_comics->series = $comics['series'];
            $new_comics->sale_date = $comics['sale_date'];
            $new_comics->type = $comics['type'];
            $new_comics->image_thumb = $comics['thumb'];
            $new_comics->save();
        }
    }
}
