<?php 
class Movie {
    public $title;
    public $original_title;
    public $image;
    public $language;
    public $vote;
    public $genre;

    public function __construct($title, $original_title, $image, $language, $vote, $genre)
    {
        $this->title = $title;
        $this->original_title = $original_title;
        $this->image = $image;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
    }

    public function getImage() {
        return $this->image;
    }

    public function getVote() {
        return $this->vote;
    }
}