<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ilch CMS 2.X - <?php echo $title; ?></title>
        <meta name="keywords" content="<?php //echo $meta_keywords; ?>" />
        <meta name="description" content="<?php //echo $meta_description; ?>" />
        <meta name="copyright" content="<?php //echo $meta_copywrite; ?>" />
        <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type), NULL, TRUE), "\n"; ?>
        <?php foreach ($scripts as $file) echo HTML::script($file, NULL, NULL, TRUE), "\n"; ?>
    </head>
    <body class="start">
		<div class="header container">
			<?php echo HTML::anchor('', 'myCanasta', array(
				'class' => 'logo'
			))?>
		</div>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="span3 mood visible-desktop">
						<img src="<?php echo URL::site('frontend/media/frontend/img/test.png'); ?>" />
					</div>
					<div class="span5 mood visible-tablet">
						<img src="<?php echo URL::site('frontend/media/frontend/img/test.png'); ?>" />
					</div>
					<div class="span4 mood-text visible-desktop">
						<p>
							Der Bube wird König!
						</p>
						<p>
							Im Herbst 2012
						</p>
					</div>
					<div class="span5 visible-desktop">
						<?php echo $content; ?>	
					</div>
					<div class="span7 hidden-desktop">
						<?php echo $content; ?>	
					</div>
				</div>
			</div>
		</div>
		<div class="footer container">
			<div class="row">
				<div class="span6">
					&copy 2012 by mycanasta.net
				</div>
				<div class="span6 nav">
					<ul class="unstyled">
						<li>
							<a href="<?php echo URL::site('imprint'); ?>">
								Impressum
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
    </body>
</html>