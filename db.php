<?php
require_once("NotORM/NotORM.php");
$pdo = new PDO("mysql:dbname=localhost;dbname=milos","root","root");
$pdo->query("SET CHARACTER SET utf8");
$db = new NotORM($pdo);
/*
foreach($db->taxonomy() as $t){
	echo $t['name']."<br>";
}
*/
?>