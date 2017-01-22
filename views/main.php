<DOCTYPE html>
<html lang ="en">
<head>
	<title>Link Share</title>
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style.css" type="text/css" />
</head>
<body>
	<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Link Share</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
          </ul>
					<ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
            <li><a href="<?php echo ROOT_URL; ?>userregister">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
		<br />
		<br />
		<br />
    <div class="container">
			<div class="row">
				<?php require($view);?>
			</div>
    </div><!-- /.container -->

</body>
</html>
