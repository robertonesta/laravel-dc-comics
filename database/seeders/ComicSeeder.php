<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db.comics');
        foreach($comics as $comic){
            $singleComic = new Comic();
            $singleComic->title=$comic['title'];
            $singleComic->description=$comic['description'];
            $singleComic->thumb=$comic['thumb'];
            $singleComic->price=$comic['price'];
            $singleComic->series=$comic['series'];
            $singleComic->sale_date=$comic['sale_date'];
            $singleComic->type=$comic['type'];
            $singleComic->save();
        }
    }
}
