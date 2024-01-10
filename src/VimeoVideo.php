<?php
require_once 'AbstractVideo.php';

class VimeoVideo extends AbstractVideo {
    public function __construct($name, $url) {
        $this->name = $name;
        $this->source = 'Vimeo';
        $this->embedCode = '<iframe src="https://player.vimeo.com/video/' . $url . '" width="1280" height="720" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>';
    }
}
?>