<?php 

session_start(); 

include 'doctype.php'; 

include 'meta.php';

echo '<title>' . $pageTitle . '</title>';

include 'resources/resources.php';

echo '</head>' . '<body>';

include 'modules/main_menu.php';

?>

