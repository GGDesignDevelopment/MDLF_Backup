<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mariana de la Fuente <?php echo $title ?></title>
		<?php foreach ($styles as $style) { echo $style; };?>
	</head>
	<body> 
		<header>
			<h1 title="fotografia"><a href="<?php echo site_url('home')?>">Mariana de la Fuente</a></h1>
	
			<nav id="nav_principal">
				<ul>
					<li><ul>
						<li class="soc_icon"><a href="<?php echo $conf->linkFacebook?>" data-icon="&#xe093;" title="Facebook"></a></li>
						<li class="soc_icon"><a href="<?php echo $conf->linkTwitter?>" data-icon="&#xe094;" title="Twitter"></a></li>
						<li class="soc_icon"><a href="<?php echo $conf->linkInstagram?>" data-icon="&#xe09a;" title="Instagram"></a></li>
						<li class="soc_icon"><a href="<?php echo $conf->linkFlickr?>" data-icon="&#xe0a6;" title="Flickr"></a></li>
					</ul></li>
					<li><a id="contactame" href="#contacto">contacto</a></li>
					<li><a href="<?php echo site_url('sobremi')?>">sobre mi</a></li>
					<li id="itemCategorias"><a id="categorias" href="#" data-icon="&#x33;">categorias</a></li>
				</ul>
			</nav>
		</header>		
  		<div id="body">