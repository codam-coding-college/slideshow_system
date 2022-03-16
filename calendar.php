<?php
	require_once("include/auth.php");
	require_once("include/settings.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Announcements Dashboard for <?php echo ORGANIZATION_NAME; ?></title>
	<script src="js/useful.js"></script>
	<script src="js/getcalendar.js"></script>
	<script src="js/calendar.js"></script>
	<script src="js/tooltip.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
	<header>
		<h1>Announcements Dashboard for <?php echo ORGANIZATION_NAME; ?></h1>
		<nav>
			<a class="header-btn day" id="default-link" onmouseover="showProgTooltip(event)" onmouseout="hideProgTooltip(event)" href="programme.php?day=default" title="Edit default programme">edit</a>
			<a class="header-btn" href="newsimple.php" onclick="openSimpleUploader(event)" title="Upload media">add</a>
			<a class="header-btn" href="show.php?day=today&num=0" target="codamshow" title="Show today's programme">slideshow</a>
		</nav>
	</header>
	<main class="center">
		<?php if (disk_free_space(__DIR__) < 100000000) { ?>
		<p class="notice"><b>Notice:</b> disk is almost full (less than 100MB remaining). It is recommended to remove some (unused) media from the <i>available media</i> list in the programme editor, so that new media can still be uploaded in the future.</p>
		<?php } ?>
		<div id="calendar"></div>
	</main>
	<div id="loading">Loading... Please wait</div>
</body>
</html>