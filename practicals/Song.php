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
    private $genre;

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
    public function __construct($title, $artist, $genre, $tempo)
    {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
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
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the genre of the song.
     *
     * @param string $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
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
echo "Title: " . $song->getTitle() . PHP_EOL;
echo "Artist: " . $song->getArtist() . PHP_EOL;
echo "Genre: " . $song->getGenre() . PHP_EOL;
echo "Tempo: " . $song->getTempo() . " BPM" . PHP_EOL;

// Setters
$song->setTitle("Stairway to Heaven");
$song->setArtist("Led Zeppelin");
$song->setGenre("Classic Rock");
$song->setTempo(84);

// Updated values
echo "Updated Title: " . $song->getTitle() . PHP_EOL;
echo "Updated Artist: " . $song->getArtist() . PHP_EOL;
echo "Updated Genre: " . $song->getGenre() . PHP_EOL;
echo "Updated Tempo: " . $song->getTempo() . " BPM" . PHP_EOL;
?>

