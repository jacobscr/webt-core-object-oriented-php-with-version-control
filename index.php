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
                    $video = new YoutubeVideo("Never Gonna Give You Up", "dQw4w9WgXcQ");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->getSource() . '</p>';
                    echo $video->getEmbeddingCode();
                ?>
            </div>
            <div class="video-entry">
                <?php
                    $video = new YoutubeVideo("COSTA RICA IN 4K 60fps HDR (ULTRA HD)", "LXb3EKWsInQ");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->getSource() . '</p>';
                    echo $video->getEmbeddingCode();
                ?>
            </div>
            <div class="video-entry">
                <?php
                    $video = new YoutubeVideo("Best of Dolby Vision 12K HDR 120fps", "7PIji8OubXU");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->getSource() . '</p>';
                    echo $video->getEmbeddingCode();
                ?>
            </div>
            <div class="video-entry">
                <?php
                    $video = new YoutubeVideo("Sony 4K Demo: Another World", "xcJtL7QggTI");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->getSource() . '</p>';
                    echo $video->getEmbeddingCode();
                ?>
            </div>
            <div class="video-entry">
                <?php
                    $video = new YoutubeVideo("Video Test 2K Samsung", "krDWc30PAGg");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->getSource() . '</p>';
                    echo $video->getEmbeddingCode();
                ?>
            </div>
            <div class="video-entry">
                <?php
                    $video = new VimeoVideo("Happy New Year, Jim", "867959464?h=9e7b190958");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->getSource() . '</p>';
                    echo $video->getEmbeddingCode();
                ?>    
            </div>
            <div class="video-entry">
                <?php
                    $video = new VimeoVideo("Daughter Of The Sea", "899380705?h=5f56e8b932");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->getSource() . '</p>';
                    echo $video->getEmbeddingCode();
                ?>    
            </div>
            <div class="video-entry">
                <?php
                    $video = new VimeoVideo("The Quarry", "877178924?h=97d169994e");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->getSource() . '</p>';
                    echo $video->getEmbeddingCode();
                ?>    
            </div>
            <div class="video-entry">
                <?php
                    $video = new VimeoVideo("Liturgy of Anti-tank Obstacles", "888747917?h=97f27d0af2");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->getSource() . '</p>';
                    echo $video->getEmbeddingCode();
                ?>    
            </div>
            <div class="video-entry">
                <?php
                    $video = new VimeoVideo("Fall Harvest", "884041762?h=468280e6c0");
                    echo '<h2>' . $video->getName() . '</h2>';
                    echo '<p>Origin: ' . $video->getSource() . '</p>';
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