<?php
require_once 'AbstractVideo.php';

class VimeoVideo extends AbstractVideo {
    public string $origin = 'Vimeo';
    public function getEmbeddingCode() : string {
        $url = $this->getSource();
        if (preg_match('/vimeo\.com\/(\d+)/', $url, $id)) {
            $video_id = $id[1];
        } else {
            // URL passt nicht zum Muster
            $video_id = null;
        }
        return '<iframe src="https://player.vimeo.com/video/' . $video_id . '" width="1280" height="720" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>';
    }
}
?>