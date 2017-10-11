<?php if(!isset($page_title)){ $page_title = 'Staff Area';}; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GBI - <?php echo $page_title; ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>">
</head>
<body>
	<header id="header" class="">
		<h1>GBI Staff Area</h1>
	</header><!-- /header -->
	<nav>
		<ul>
			<li><a href="<?php echo url_for('/staff/index.php'); ?>" title="Menu">Menu</a></li>
		</ul>
	</nav>