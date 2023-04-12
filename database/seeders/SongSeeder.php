<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            [
                'title'=>'The Less I Know The Better',
                'artist'=>'Tame Impala',
                'genre'=>'Alternative',
                'year'=>'2015'
            ],
            [
                'title'=>'Don\'t Start Now',
                'artist'=>'Dua Lipa',
                'genre'=>'Pop',
                'year'=>'2019'
            ],
            [
                'title'=>'Shape of You',
                'artist'=>'Ed Sheeran',
                'genre'=>'Pop',
                'year'=>'2017'
            ],
            [
                'title'=>'Uptown Funk',
                'artist'=>'Mark Ronson feat. Bruno Mars',
                'genre'=>'Funk',
                'year'=>'2014'
            ],
            [
                'title'=>'Closer',
                'artist'=>'The Chainsmokers feat. Halsey',
                'genre'=>'Electronic',
                'year'=>'2016'
            ],
            [
                'title'=>'Blinding Lights',
                'artist'=>'The Weeknd',
                'genre'=>'Pop',
                'year'=>'2020'
            ],
            [
                'title'=>'Radioactive',
                'artist'=>'Imagine Dragons',
                'genre'=>'Alternative',
                'year'=>'2012'
            ],
            [
                'title'=>'Shallow',
                'artist'=>'Lady Gaga and Bradley Cooper',
                'genre'=>'Pop',
                'year'=>'2018'
            ],
            [
                'title'=>'Bad Guy',
                'artist'=>'Billie Eilish',
                'genre'=>'Pop',
                'year'=>'2019'
            ],
            [
                'title'=>'Hello',
                'artist'=>'Adele',
                'genre'=>'Pop',
                'year'=>'2015'
            ]
        ]);

    }
}
