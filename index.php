<?php
include 'config.inc.php';
if (isset($_GET["ID"]))
	$ID = $_GET["ID"];
else
	$ID = 0;
include 'head.inc.php';
?>
<body>
	<div class="seite">
		<?php include 'navigation.inc.php'; ?>
		<hr>
		<?php include 'header.inc.php'; ?>
		<hr>
		<?php include $CFG['NAV'][$ID]['Datei']; ?>
		<hr>
		<div class='clearfix'></div>
		<?php include 'footer.inc.php'; ?>
	</div>
</body>
</html>
