	<div class="text-center">
		<?php if(isset($_SESSION['is_logged_in'])) : ?>
		<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH;?>shares/add">Share something</a>
	<?php endif; ?>
		<?php foreach($viewmodel as $item) :?>
			<div class="well">
				<h4><?php echo $item['title'];?></h4>
				<small><?php echo $item['create_date'];?></small>
				<hr />
				<p><?php echo $item['body'];?></p>
				<br />
				<a class="btn btn-default" href="<?php echo $item['link'];?>" target="_blank"><?php echo $item['link'];?></a>

			</div>
		<?php endforeach;?>
