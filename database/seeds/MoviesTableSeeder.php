<?php

use Illuminate\Database\Seeder;

use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Models\Movie::class, 10)->create();
        Movie::insert([
             [
                'title' => 'title',
                'director' => 'Kide',
                'imageUrl' => 'randomUrl',
                'duration' => 2,
                'releaseDate' => 'date',
                'genre' => 'comedy',
             ],
             [
                'title' => 'title1',
                'director' => 'Kide1',
                'imageUrl' => 'randomUrl1',
                'duration' => 1,
                'releaseDate' => 'date2',
                'genre' => 'comedy',
             ],
             [
                'title' => 'naslov',
                'director' => 'Kide1',
                'imageUrl' => 'randomUrl1',
                'duration' => 1,
                'releaseDate' => 'date2',
                'genre' => 'comedy',
             ],
             [
                'title' => 'naslov2',
                'director' => 'Kide1',
                'imageUrl' => 'randomUrl1',
                'duration' => 1,
                'releaseDate' => 'date2',
                'genre' => 'comedy',
             ],
             [
                'title' => 'ime1',
                'director' => 'Kide1',
                'imageUrl' => 'randomUrl1',
                'duration' => 1,
                'releaseDate' => 'date2',
                'genre' => 'comedy',
             ],
             [
                'title' => 'ime2',
                'director' => 'Kide1',
                'imageUrl' => 'randomUrl1',
                'duration' => 1,
                'releaseDate' => 'date2',
                'genre' => 'comedy',
             ],
             [
                'title' => 'film1',
                'director' => 'Kide1',
                'imageUrl' => 'randomUrl1',
                'duration' => 1,
                'releaseDate' => 'date2',
                'genre' => 'comedy',
             ],
             [
                'title' => 'film2',
                'director' => 'Kide1',
                'imageUrl' => 'randomUrl1',
                'duration' => 1,
                'releaseDate' => 'date2',
                'genre' => 'comedy',
             ],
             [
                'title' => 'neki1',
                'director' => 'Kide1',
                'imageUrl' => 'randomUrl1',
                'duration' => 1,
                'releaseDate' => 'date2',
                'genre' => 'comedy',
             ],
             [
                'title' => 'neki2',
                'director' => 'Kide1',
                'imageUrl' => 'randomUrl1',
                'duration' => 1,
                'releaseDate' => 'date2',
                'genre' => 'comedy',
             ]
        ]);
    }
}
