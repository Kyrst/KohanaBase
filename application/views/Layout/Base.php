<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $page_title; ?></title>
		<?php if ($meta_description !== ''): ?><meta name="description" content="<?php echo $meta_description; ?>"><?php endif; ?>
		<?php foreach ( $lib_css_files as $css_file ): ?>
			<link href="<?php echo $css_file; ?>" rel="stylesheet">
		<?php endforeach; ?>
		<?php foreach ( $css_files as $css_file ): ?>
			<link href="<?php echo $css_file; ?>" rel="stylesheet">
		<?php endforeach; ?>
		<?php
		/*<?php if ( ($num_css_files = count($css_files)) > 0 ): ?>
			<link href="<?php echo URL::site(); ?>helper/combine_css?<?php foreach ( $css_files as $i => $css_file ): ?>f[]=<?php echo $css_file, ($i < ($num_css_files - 1) ? '&amp;' : ''); ?><?php endforeach; ?>" rel="stylesheet">
		<?php endif; ?>*/
		?>
	</head>
	<body>
		<div id="container">
			<header id="header" class="clearfix">
				<a href="<?php echo URL::base(); ?>" id="logo">Base</a>
				<nav id="nav">
					<?php echo HTML::anchor('/', 'Home', array('class' => 'btn btn-small' . ($current_page === 'home' ? ' btn-primary' : ''))); ?>
					<?php echo HTML::anchor('/about', 'About', array('class' => 'btn btn-small' . ($current_page === 'about' ? ' btn-primary' : ''))); ?>
					<?php echo HTML::anchor('/user', 'User', array('class' => 'btn btn-small' . ($current_page === 'user' ? ' btn-primary' : ''))); ?>
					<a href="javascript:" id="help_button" class="btn btn-small">Help</a>
				</nav>
			</header>
			<div id="content">
				<div class="inner">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
		<?php if ( count($js_vars) > 0 ): ?>
			<script>
				<?php foreach ( $js_vars as $name => $value ): ?>
					<?php if ( is_array($value) ): ?>
						var <?php echo $name, ' = ', json_encode($value); ?>;
					<?php else: ?>
						var <?php echo $name, ' = ', (is_string($value) ? '\'' . $value . '\'' : (is_bool($value) ? ($value ? 'true' : 'false') : $value)), ';'; ?>
					<?php endif; ?>
				<?php endforeach; ?>
			</script>
		<?php endif; ?>
		<?php foreach ( $lib_js_files as $js_file ): ?>
			<script src="<?php echo $js_file; ?>"></script>
		<?php endforeach; ?>
		<?php foreach ( $js_files as $js_file ): ?>
			<script src="<?php echo $js_file; ?>"></script>
		<?php endforeach; ?>
		<?php
		/*<?php if ( ($num_js_files = count($js_files)) > 0 ): ?>
			<script src="<?php echo URL::site(); ?>helper/combine_js?<?php foreach ( $js_files as $i => $js_file ): ?>f[]=<?php echo $js_file, ($i < ($num_js_files - 1) ? '&amp;' : ''); ?><?php endforeach; ?>"></script>
		<?php endif; ?>*/
		?>
		<div id="dialog"></div>
		<?php echo $blocks['bottom']; ?>
	</body>
</html>