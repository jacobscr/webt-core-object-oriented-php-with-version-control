<?php
require_once 'AbstractVideo.php';

class YoutubeVideo extends AbstractVideo {
    public string $origin = 'YouTube';
    public function getEmbeddingCode() : string {
        $url = $this->getSource();
        if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $url, $id)) {
            $video_id = $id[1];
        } else {
            // URL passt nicht zum Muster
            $video_id = null;
        }

        return '<iframe width="1280" height="720" src="https://www.youtube.com/embed/' . $video_id . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }
}
?>