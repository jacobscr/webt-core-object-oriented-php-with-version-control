<?php
require_once 'AbstractVideo.php';

class YoutubeVideo extends AbstractVideo {
    public function __construct($name, $url) {
        $this->name = $name;
        $this->source = 'YouTube';
        $this->embedCode = '<iframe width="1280" height="720" src="https://www.youtube.com/embed/' . $url . '" title="' . $this->name . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    }
}
?>