<?php
include_once dirname(__FILE__) . "/connect.inc.php";

foreach ($software->application() as $application) {
	echo $application['title']." (" . $application->author["name"] . ")<br>";
	foreach ($application->application_tag() as $application_tag) {
		echo "\t" . $application_tag->tag["name"] . "<br>";
	}
}
?>