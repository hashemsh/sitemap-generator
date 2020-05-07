ndle = fopen("../list-url.txt", "r");
if ($handle) {
while (($line = fgets($handle)) !== false) {
?>
<url>
	<loc><?php echo $line ?></loc>
	<priority>1</priority>
	<changefreq>daily</changefreq>
	<lastmod><?php echo date("c", $now); ?></lastmod>
</url>
<?php
	}                                       
fclose($handle);
} 
else {
	echo "Error accessing Tracking Data";
} 
?>
