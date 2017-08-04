<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	$server_root = str_replace("site/index.php","",strtr(__FILE__, "\\", "/"));
	include "../core/launch.php";
?>
