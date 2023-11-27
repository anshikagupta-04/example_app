<?php
namespace Practicals;
class Song
{
    /**
     * @var string The title of the song.
     */
    private $title;

    /**
     * @var string The artist or band of the song.
     */
    private $artist;

    /**
     * @var string The genre of the song.
     */
    private $time;

    /**
     * @var int The tempo of the song in beats per minute.
     */
    private $tempo;

    /**
     * Song constructor.
     *
     * @param string $title  The title of the song.
     * @param string $artist The artist or band of the song.
     * @param string $genre  The genre of the song.
     * @param int    $tempo  The tempo of the song in beats per minute.
     */
    public function __construct($title, $artist, $time, $tempo)
    {
        $this->title = $title;
        $this->artist = $artist;
        $this->time = $time;
        $this->tempo = $tempo;
    }

    /**
     * Get the title of the song.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the title of the song.
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get the artist or band of the song.
     *
     * @return string
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set the artist or band of the song.
     *
     * @param string $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * Get the genre of the song.
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the genre of the song.
     *
     * @param string $genre
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * Get the tempo of the song in beats per minute.
     *
     * @return int
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Set the tempo of the song in beats per minute.
     *
     * @param int $tempo
     */
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
    }
}

// Example usage:
$song = new Song("Bohemian Rhapsody", "Queen", "Rock", 72);

// Getters
// echo "Title: " . $song->getTitle() . PHP_EOL;
// echo "Artist: " . $song->getArtist() . PHP_EOL;
// echo "Time: " . $song->getTime() . PHP_EOL;
// echo "Tempo: " . $song->getTempo() . " BPM" . PHP_EOL;

// Setters
$song->setTitle("Stairway to Heaven");
$song->setArtist("Led Zeppelin");
$song->setTime("Classic Rock");
$song->setTempo(84);

// Updated values
// echo "Updated Title: " . $song->getTitle() . PHP_EOL;
// echo "Updated Artist: " . $song->getArtist() . PHP_EOL;
// echo "Updated Time: " . $song->getTime() . PHP_EOL;
// echo "Updated Tempo: " . $song->getTempo() . " BPM" . PHP_EOL;
?>

