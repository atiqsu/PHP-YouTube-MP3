<?php
$id = $_GET['id'];
require('files/youtube-dl.class.php');
try {
    $mytube = new yt_downloader("http://www.youtube.com/watch?v={$id}", TRUE, "audio");

    $audio = $mytube->get_audio();
    $path_dl = $mytube->get_downloads_dir();

    clearstatcache();
    if($audio !== FALSE && file_exists($path_dl . $audio) !== FALSE)
    {
        header("Location:". $path_dl . $audio ."");
    } else {
        print("Oops, Something went Wrong");
    }
}
catch (Exception $e) {
    header('Location: '.$_SERVER['REQUEST_URI']);
}
