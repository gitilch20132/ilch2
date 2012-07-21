<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ilch CMsS 2.X - <?php echo $title; ?></title>
        <meta name="keywords" content="<?php //echo $meta_keywords; ?>" />
        <meta name="description" content="<?php //echo $meta_description; ?>" />
        <meta name="copyright" content="<?php //echo $meta_copywrite; ?>" />
        <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type), NULL, TRUE), "\n"; ?>
        <?php foreach ($scripts as $file) echo HTML::script($file, NULL, NULL, TRUE), "\n"; ?>
    </head>
    <body>
    	<div class="container">
	       	<header>
	    		<?php echo HTML::anchor('/', NULL, array(
	    			'class' => 'logo'
				)); ?>
	    	</header>
	    	<div class="content">
	    		<aside>
	    			<div class="box">
	    				<header>
	    					Menü
	    				</header>
	    				<nav>
		    				<ul>
		    					<li>
		    						<a href="#">Page 1</a>
		    					</li>
		    					<li>
		    						<a href="#">Page 2</a>
		    					</li>
		    					<li>
		    						<a href="#" class="active">Page 3</a>
		    					</li>
		    					<li>
		    						<a href="#">Page 4</a>
		    					</li>
		    					<li>
		    						<a href="#">Page 5</a>
		    					</li>
		    				</ul>
	    				</nav>
	    			</div>
	    			<div class="box">
	    				<header>
	    					Menü
	    				</header>
	    				<section class="content">
	    					Hallo, dies ist eine Testbox
	    				</section>
	    			</div>
	    			<div class="box">
	    				<header>
	    					Menü
	    				</header>
	    				<section class="content">
	    					
	    				</section>
	    			</div>
	    		</aside>
    			<section id="content">
	    			<?php echo $content; ?>
	    		</section>
	    		<aside>
	    			<div class="box">
	    				<header>
	    					Menü
	    				</header>
	    				<nav>
		    				<ul>
		    					<li>
		    						<a href="#">Page 1</a>
		    					</li>
		    					<li>
		    						<a href="#">Page 2</a>
		    					</li>
		    					<li>
		    						<a href="#">Page 3</a>
		    					</li>
		    					<li>
		    						<a href="#">Page 4</a>
		    					</li>
		    					<li>
		    						<a href="#">Page 5</a>
		    					</li>
		    				</ul>
	    				</nav>
	    			</div>
	    			<div class="box">
	    				<header>
	    					Menü
	    				</header>
	    				<section class="content">
	    					Hallo, dies ist eine Testbox
	    				</section>
	    			</div>
	    			<div class="box">
	    				<header>
	    					Menü
	    				</header>
	    				<section class="content">
	    					
	    				</section>
	    			</div>
	    		</aside>
	    		<br class="clear" />
		    	<footer class="clearfix">
		    		Design by <?php echo HTML::anchor('http://www.oldesworld.de', 'oldesworld.de', array(
						'rel' => 'nofollow'
					)); ?>
		    		<?php echo HTML::anchor('http://www.ilch-pluto.net/', 'Powered by Ilch Pluto', array(
						'rel' => 'nofollow',
						'class' => 'logo',
						'title' => 'Powered by Ilch Pluto'
					)); ?>
		    	</footer>
	    	</div>
    	</div>
    	<?php if (Kohana::$profiling === TRUE): ?>
	    	<div class="container clearfix">
	    		<div class="content">
	    			<?php echo View::factory('profiler/stats'); ?>
	    		</div>
	    	</div>
	    <?php endif; ?>
    </body>
</html>