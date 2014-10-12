
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
          <a href="../" class="navbar-brand">YouTube Downloader - Contact Me</a>
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
<?php
if(isset($_GET['success'])) {
echo'
<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Success</strong> Email has been sent!</a>.
</div>';
}
?>
<div class="container">
<br />
    <div class="row">
        <div class="col-md-9">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Contact Me</h3>
  </div>
  <div class="panel-body">
<div class="col-md-8">
<p>

						<form name="contactform" method="post" action="files/mailer.php" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">Name</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputSubject" class="col-lg-2 control-label">Subject</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-2 control-label">Message</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" class="btn btn-default">
										Send Message
									</button>
								</div>
							</div>
						</form>

</p>
</div>
  </div>
</div>
        </div>
        <div class="col-md-3">
<div class="list-group">
  <a href="#" class="list-group-item active">News</a>
  <a href="#" class="list-group-item">Some News</a>
  <a href="#" class="list-group-item">Some News</a>
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