<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable=['title', 'artist', 'time', 'tempo'];
    public function getTitle() {
        return $this->title;
    }
    public function getArtist() {
        return $this->artist;
    }
    public function getTime() {
        return $this->time;
    }
    public function getTempo() {
        return $this->tempo;
    }
}
