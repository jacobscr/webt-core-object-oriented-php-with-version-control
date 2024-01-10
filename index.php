<?php
require_once 'src/VimeoVideo.php';
require_once 'src/YoutubeVideo.php';
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <title>Trailer Portal</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Acolytes of Ash</h1>
        <section class="grid">
            <div class="video-entry">
                <?php
                    $video = new YoutubeVideo("Never Gonna Give You Up", "https://www.youtube.com/watch?v=dQw4w9WgXcQ");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->origin . '</p>';
                    echo $video->getEmbeddingCode();
                ?>
            </div>
            <div class="video-entry">
                <?php
                    $video = new YoutubeVideo("COSTA RICA IN 4K 60fps HDR (ULTRA HD)", "https://www.youtube.com/watch?v=LXb3EKWsInQ");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->origin . '</p>';
                    echo $video->getEmbeddingCode();
                ?>
            </div>
            <div class="video-entry">
                <?php
                    $video = new YoutubeVideo("Best of Dolby Vision 12K HDR 120fps", "https://www.youtube.com/watch?v=7PIji8OubXU");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->origin . '</p>';
                    echo $video->getEmbeddingCode();
                ?>
            </div>
            <div class="video-entry">
                <?php
                    $video = new YoutubeVideo("Sony 4K Demo: Another World", "https://www.youtube.com/watch?v=xcJtL7QggTI");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->origin . '</p>';
                    echo $video->getEmbeddingCode();
                ?>
            </div>
            <div class="video-entry">
                <?php
                    $video = new YoutubeVideo("Video Test 2K Samsung", "https://www.youtube.com/watch?v=krDWc30PAGg");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->origin . '</p>';
                    echo $video->getEmbeddingCode();
                ?>
            </div>
            <div class="video-entry">
                <?php
                    $video = new VimeoVideo("Happy New Year, Jim", "https://vimeo.com/867959464");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->origin . '</p>';
                    echo $video->getEmbeddingCode();
                ?>    
            </div>
            <div class="video-entry">
                <?php
                    $video = new VimeoVideo("Daughter Of The Sea", "https://vimeo.com/899380705");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->origin . '</p>';
                    echo $video->getEmbeddingCode();
                ?>    
            </div>
            <div class="video-entry">
                <?php
                    $video = new VimeoVideo("The Quarry", "https://vimeo.com/877178924");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->origin . '</p>';
                    echo $video->getEmbeddingCode();
                ?>    
            </div>
            <div class="video-entry">
                <?php
                    $video = new VimeoVideo("Liturgy of Anti-tank Obstacles", "https://vimeo.com/888747917");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->origin . '</p>';
                    echo $video->getEmbeddingCode();
                ?>    
            </div>
            <div class="video-entry">
                <?php
                    $video = new VimeoVideo("Fall Harvest", "https://vimeo.com/884041762");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->origin . '</p>';
                    echo $video->getEmbeddingCode();
                ?>    
            </div>
            <div class="video-entry">
                <h2>Never Gonna Give You Up</h2>
                <p>Origin: YouTube</p>
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>
            <div class="video-entry">
                <h2>Never Gonna Give You Up</h2>
                <p>Origin: YouTube</p>
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>
            <div class="video-entry">
                <h2>Never Gonna Give You Up</h2>
                <p>Origin: YouTube</p>
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>
            <div class="video-entry">
                <h2>Never Gonna Give You Up</h2>
                <p>Origin: YouTube</p>
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>
            <div class="video-entry">
                <h2>Never Gonna Give You Up</h2>
                <p>Origin: YouTube</p>
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>
            <div class="video-entry">
                <h2>Never Gonna Give You Up</h2>
                <p>Origin: YouTube</p>
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>
            <div class="video-entry">
                <h2>Never Gonna Give You Up</h2>
                <p>Origin: YouTube</p>
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>
            <div class="video-entry">
                <h2>Never Gonna Give You Up</h2>
                <p>Origin: YouTube</p>
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>
            <div class="video-entry">
                <h2>Never Gonna Give You Up</h2>
                <p>Origin: YouTube</p>
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>
            <div class="video-entry">
                <h2>Never Gonna Give You Up</h2>
                <p>Origin: YouTube</p>
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Rick Astley - Never Gonna Give You Up (Official Music Video)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>
        </section>
    </body>
    <footer>
        <p>&copy; Jacob Schrott</p>
    </footer>
</html>