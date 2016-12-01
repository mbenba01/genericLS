<?php
	
	$login_form = 'html/login_form_tpl.html';
	$tpl = file_get_contents($login_form);
	
	$self = htmlentities ( $_SERVER ['PHP_SELF'] );
	$name = 'login-form';

	$pass1 = str_replace('[+action+]', $self, $tpl);
	$final = str_replace('[+name+]', $name, $pass1);

	echo $final;