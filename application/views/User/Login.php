<h1>Log In</h1>
<div class="alert alert-block">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Warning!</h4>
	Best check yo self, you're not...
</div>
<div class="alert alert-error">
	<h4>Error!</h4>
	Damn it...
</div>
<div class="alert alert-success">
	<h4>Success!</h4>
	<p>Great success Mr.</p>
</div>
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