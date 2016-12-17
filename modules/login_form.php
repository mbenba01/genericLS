<?php
		
	$login_form = 'html/login_form_tpl.html';
	$tpl = file_get_contents($login_form);
	
	$self = htmlentities ( $_SERVER ['PHP_SELF'] );
	$name = 'login-form';
	$label_one = 'Username';
	$label_two = 'Password';
	$registration_page = 'register.php?' . SID;

	$pass1 = str_replace('[+action+]', $self, $tpl);
	$pass2 = str_replace('[+name+]', $name, $pass1);
	$pass3 = str_replace('[+labelOne+]', $label_one, $pass2);
	$pass4 = str_replace('[+labelTwo+]', $label_two, $pass3);
	$final = str_replace('[+register+]', $registration_page, $pass4);

	echo $final;