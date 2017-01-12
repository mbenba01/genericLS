<?php
		
	$login_form = 'html/login_form_tpl.html';
	$tpl = file_get_contents($login_form);
	
	$self = htmlentities ( $_SERVER ['PHP_SELF'] );
	$name = 'login-form';
	$registration_page = 'registration_manager.php?' . SID;

	$pass1 = str_replace('[+action+]', $self, $tpl);
	$pass2 = str_replace('[+name+]', $name, $pass1);
	$final = str_replace('[+register+]', $registration_page, $pass2);

	echo $final;