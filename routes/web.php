<?php

use App\Models\Song;
use Illuminate\Support\Facades\Route;
// use Practicals\Song;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/veggies', function () {
//     return view('veggies');
// });
Route::get('/veggies/{veggieNames}', function (string $veggieNames) {
    return $veggieNames;
})->whereIn('veggieNames',['baigan','aaloo','gobhi','bhindi']);

// Route::get('/songs', function () {
//     return "Songs";
// });
// Route::get('/songs', function () {
//     return view('songs');
// });
// Route::get('/songs', function () {
//     $song = new Song();
//     $song->setTitle('With You');
//     return view('songs', [ 'song' => $song ]);
// });

Route::get('/songs_static', function () {
    // $song1 = new Song("Stay with Me","CHANYEOL","3:12",125);
    // $song1->setTitle("Stay with Me");
    // $song1->setArtist("CHANYEOL");
    // $song1->setTime("3:12");
    // $song1->setTempo(125);
  
    // $song2 = new Song("Lover","Taylor Swift","3:41",69);
    // $song2->setTitle("Lover");
    // $song2->setArtist("Taylor Swift");
    // $song2->setTime("3:41");
    // $song2->setTempo(69);
  
    // $song3 = new Song("Friends","BTS","3:19",80);
    // $song3->setTitle("Friends");
    // $song3->setArtist("BTS");
    // $song3->setTime("3:19");
    // $song3->setTempo(80);
  
    // return view('songs', [ 'songs' => [ $song1, $song2, $song3 ] ]); 
    return view('songs_static');
  });

  Route::get('/songs_spotify', function () {
    return view('songs_spotify');
});

Route::get('/songs', function () {
    return view('songs', [ 'songs' => Song::all() ] );
});
