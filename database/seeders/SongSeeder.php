<?php

namespace Database\Seeders;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
	    //
	    // Seed a few songs
        Song::create([
            'artist' => 'CHANYEOL',
            'title' => 'Stay with Me',
            'time' => '3:12',
            'tempo' => 125,
        ]);

        Song::create([
            'artist' => 'Taylor Swift',
            'title' => 'Lover',
            'time' => '3:41',
            'tempo' => 69,
        ]);
    }
}