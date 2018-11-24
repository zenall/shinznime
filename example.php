<?php
// DriveGrabber class
require_once(__DIR__ .'/drive_grabber.php');

$drive = new DriveGrabber();
$videoUrl = $drive->getDownloadLink('1VHco1KxapTm40mJ1_PTq5brfU1DHX6aF');
?>
<!doctype html>
<html>
	<head>
		<title>Test Drive Grabber</title>
	</head>

	<body>
		<?php if ($videoUrl != null): ?>
		<video width="900" controls>
			<source src="<?php echo $videoUrl ?>" type="video/mp4">
			Your browser does not support HTML5 video.
		</video>
		<?php else: ?>
		<p>Link video tidak ditemukan, kemungkinan bandwidth drive telah dilimit ataupun video telah dihapus.</p>
		<?php endif; ?>
	</body>
</html>
