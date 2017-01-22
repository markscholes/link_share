<DOCTYPE html>
<html lang ="en">
<head>
	<title>Link Share</title>
</head>
<body>
	<div class="panel panel-default">
  	<div class="panel-heading">Share something!</div>
  	<div class="panel-body">
    	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label for="title">Share Title</label>
					<input class="form-control" type="text" name="title"/>
				</div>
				<div class="form-group">
					<label for="body">Body</label>
					<textarea name="body" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="title">Link</label>
					<input class="form-control" type="text" name="link"/>
				</div>
				<input type="submit" name="submit" value="submit" class="btn btn-primary" />
				<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares" name="cancel">Cancel</a>
				<form>
  		</div>
	</div>
</body>
</html>
