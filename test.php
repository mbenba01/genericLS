<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

/*
 * Project: GENERIC LOGIN SYSTEM
 * Author: MUSTAPHA BENBAZIZ
 * Date: 30/11/2016
 * Description: The aim of this project is to develop using php, HTML 5 and CSS 3
 * 
 * File name: index.php
 * This is the index page which will be used as a single point of entry.
 * It must include a login form, a header section, a primary menu and a content area.
 * 
 */

$pageTitle = 'Home page';

include 'includes/header.php';


// echo content
$fp = fopen('resources/user.txt', 'a+');

$user = "Mustapha Benbaziz" . "," .
		"m.benbaziz@hotmail.co.uk" . "," .
		"mustapha2ieme" . "," .
		"1qaz0p;/" . 
		"\n";

// if(is_writeable($fp)) {
	
	try {
	
		$result = fwrite($fp, $user);
		
	
	} catch (Exception $e) {
		
		die('Error: ' . $e->getMessage());
		
	}
	
// }

fclose($fp);


include 'includes/footer.php'; 