<?php $title = 'Jean Forteroche - Blog'; 
ob_start();
require("header.php"); 
if(!isset($_SESSION["email"])){
require("home.php");
}
require("listPostsView.php");
require("footer.php");
$content = ob_get_clean();
require("template.php");
