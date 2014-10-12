
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>YouTube Downloader</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="assets/css/bootswatch.min.css">

  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">YouTube Downloader</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="terms.php">Terms</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="contact.php" target="_blank">Contact Me</a></li>
          </ul>

        </div>
      </div>
    </div>
<div class="container">
<br />
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Advertisement</h3>
  </div>
  <div class="panel-body">
<?php include("files/ad1.php"); ?>
  </div>
  </div>
</div>
    <div class="row">
        <div class="col-md-9">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Download MP3</h3>
  </div>
  <div class="panel-body">
<div class="col-md-8">
<form class="navbar-form navbar-left" role="search" action="index.php" method="post">
  <div class="form-group">
    <input type="text" name="id" size="50" pattern=".{9,15}" required title="Not Enough (Less Than 9 Chars) Or Too Much (More than 15 Chars)." class="form-control" placeholder="Video ID Only EG: KJvSdgp1ztg">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
$id = $_POST["id"];
if(!isset($id) || trim($id) == '')
{
   echo "";
} else {
if(isset($_POST['id'])) {
$json = json_decode(file_get_contents('http://gdata.youtube.com/feeds/api/videos/' . $id . '?v=2&alt=jsonc'), true);
$uploaded = $json['data']['uploaded'];
$uploaded = str_replace('T', ' - ', $uploaded);
$uploaded = str_replace('Z', '', $uploaded);
$uploaded = str_replace('.000', '', $uploaded);
$rating = $json['data']['rating'];
$rating = round($rating, 2);
$uploader = $json['data']['uploader'];
$likes = $json['data']['likeCount'];
$comments = $json['data']['commentCount'];
$title = $json['data']['title'];
$thumbs = $json['data']['thumbnail']['hqDefault'];

echo "<br /><br /><br /><p><b>Title: {$title}</b><br />";
echo "<b>Uploader: {$uploader}</b><br />";
echo "<b>Likes: {$likes}</b><br />";
echo "<b>Video Rating: {$rating} out of 5</b><br />";
echo "<b>Comments: {$comments}</b><br />";
echo "<b>Uploaded: {$uploaded}</b><br />";
echo "</p>";
echo "<br /><br />";
echo "<center><a href='dl.php?id={$id}' class='btn btn-primary'>CLICK HERE TO DOWNLOAD SONG</a></center>";
}
}
?>
</div>
<?php
if(!isset($id) || trim($id) == '')
{
   echo "You did not fill out the required fields.";
} else {
if(isset($_POST['id'])) {
echo "<img src=" . $thumbs . " width='225px' height='129px' class='img-thumbnail'>";
}
}
?>
  </div>
</div>
        </div>
        <div class="col-md-3">
<div class="list-group">
  <a href="#" class="list-group-item active">News</a>
  <a href="#" class="list-group-item">Some News</a>
  <a href="#" class="list-group-item">Some News</a>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Advertisement</h3>
  </div>
  <div class="panel-body">
<?php include("files/ad2.php"); ?>
  </div>
</div>
        </div>
    </div>
</div>
<footer>
        <div class="row">
          <div class="col-lg-12">

            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
              <li><a href="index.php">Home</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="terms.php">Terms</a></li>
              <li><a href="contact.php">Contact Me</a></li>
            </ul>
            <p>Made by Gav, follow me at <a href="http://twitter.com/gavxd">@GavXD</a></p>
			<p>This project is available to download at my <a href="https://github.com/GavoTrav">GitHub</a> Soon.</p>
          </div>
        </div>

      </footer>
</div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootswatch.js"></script>
  </body>
</html>