<?php 

	$main_menu = 'html/main_menu_tpl.html';
	$tpl = file_get_contents($main_menu);
	
	$homepage = 'index.php?' . SID;
	$public = 'public.php?' . SID;
	$private = 'private.php?' . SID;
	$members = 'members.php?' . SID;
	
	$pass1 = str_replace('[+homepage+]', $homepage, $tpl);
	$pass2 = str_replace('[+public+]', $public, $pass1);
	$pass3 = str_replace('[+private+]', $private, $pass2);
	$final = str_replace('[+members+]', $members, $pass3);
	
	echo $final;