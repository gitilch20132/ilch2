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
    <body>
		<div class="fixed">
			<div class="left"></div>
			<div class="right"></div>
		</div>
		<div class="sidebar">
			<?php echo HTML::anchor('/backend/', 'Ilch Pluto Dashboard', array(
				'class' => 'logo'
			)); ?>
			<ul class="unstyled">
				<li class="active">
					<a href="#">
	    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/dashboard.png);"></i>
	    				<span>Dashboard</span>
					</a>
				</li>
			</ul>
			<ul class="unstyled">
				<li>
					<a href="#">
	    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/blog.png);"></i>
	    				<span>Blog</span>
	    				<span class="count">5</span>
					</a>
					<ul class="unstyled">
	    				<li>
	    					<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/blog/article.png);"></i>
			    				<span>Artikel</span>
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/blog/category.png);"></i>
			    				<span>Kategorien</span>
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/blog/comment.png);"></i>
			    				<span>Kommentare</span>
	    						<span class="count">5</span>
	    					</a>
	    				</li>
					</ul>
				</li>
			</ul>
			<ul class="unstyled">
				<li>
					<a href="#">
	    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/page.png);"></i>
	    				<span>Seiten</span>
					</a>
					<ul class="unstyled">
	    				<li>
	    					<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/general/overview.png);"></i>
			    				<span>Übersicht</span>
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/general/add.png);"></i>
			    				<span>Hinzufügen</span>
	    					</a>
	    				</li>
					</ul>
				</li>
				<li>
					<a href="#">
	    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/widget.png);"></i>
	    				<span>Widgets</span>
					</a>
				</li>
			</ul>
			<ul class="unstyled">
				<li>
					<a href="#">
	    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/user.png);"></i>
	    				<span>Mitglieder</span>
					</a>
					<ul class="unstyled">
						<li>
							<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/general/overview.png);"></i>
			    				<span>Übersicht</span>
							</a>
						</li>
						<li>
							<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/user/adapter.png);"></i>
			    				<span>Login Adapter</span>
							</a>
						</li>
						<li>
							<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/general/add.png);"></i>
			    				<span>Hinzufügen</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
	    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/user/group.png);"></i>
	    				<span>Berechtigungen</span>
					</a>
				</li>
			</ul>
			<ul class="unstyled">
				<li>
					<a href="#">
	    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/configuration.png);"></i>
	    				<span>Konfiguration</span>
					</a>
				</li>
				<li>
					<a href="#">
	    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/module.png);"></i>
	    				<span>Module</span>
					</a>
					<ul class="unstyled">
	    				<li>
	    					<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/general/overview.png);"></i>
			    				<span>Übersicht</span>
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/general/download.png);"></i>
			    				<span>Downloadserver</span>
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/general/setting.png);"></i>
			    				<span>Einstellungen</span>
	    					</a>
	    				</li>
					</ul>
				</li>
				<li>
					<a href="#">
	    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/theme.png);"></i>
	    				<span>Themes</span>
					</a>
					<ul class="unstyled">
	    				<li>
	    					<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/general/overview.png);"></i>
			    				<span>Übersicht</span>
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/general/download.png);"></i>
			    				<span>Downloadserver</span>
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
			    				<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/general/setting.png);"></i>
			    				<span>Einstellungen</span>
	    					</a>
	    				</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="wrapper">
			<div class="header">
				<div class="menu clearfix">
	    			<ul class="unstyled clearfix">
	    				<li>
	    					Eingeloggt als <span>Nobody</span>
	    				</li>
	    				<li>
	    					<a href="#">
	    						Startseite
	    					</a>
	    				</li>
	    				<li>
	    					<a href="#">
	    						Profil bearbeiten
	    					</a>
	    				</li>
	    			</ul>
				</div>
				<div class="tabs">
	    			<div class="left">
		    			<i class="icon" style="background-image: url(/index.php/media/backend/img/icons/dashboard.png);"></i>
		    			<span>Adminübersicht</span>
	    			</div>
	    			<div class="right">
	    				<ul class="clearfix unstyled">
	    					<li class="active">
	    						<a href="#">
	    							Übersicht
	    						</a>
	    					</li>
	    					<li>
	    						<a href="#">
	    							System
	    						</a>
	    					</li>
	    				</ul>
	    			</div>
				</div>
			</div>
			<div class="content">
				<?php echo $content; ?>
			</div>
		</div>
    </body>
</html>