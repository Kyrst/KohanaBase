<h1>Log In</h1>
<?php echo Form::open('/user/login'); ?>
	<div class="control-group">
		<label id="username" class="control-label">Username:</label>
		<?php echo Form::input('username', '', array('id' => 'username')); ?>
	</div>
	<div class="control-group">
		<label for="password" class="control-label">Password:</label>
		<?php echo Form::password('password', '', array('id' => 'password')); ?>
	</div>
	<?php echo Form::submit('login', 'Log In', array('class' => 'btn')); ?>
<?php echo Form::close(); ?>