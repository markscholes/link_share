<div class="panel panel-default">
	<div class="panel-heading">
      <h3 class="panel-title">Register</h3>
    </div>
  	<div class="panel-body">
    	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
					<label for="name">Name</label>
					<input class="form-control" type="text" name="name" />
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" />
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<input type="submit" name="submit" value="submit" class="btn btn-primary" />
			<form>
  	</div>
</div>
