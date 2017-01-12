<?php
	
	$registration_form = dirname(__DIR__) . '/html/registration_form_tpl.html';
	$tpl = file_get_contents ( $registration_form );
	
	$self = htmlentities ( $_SERVER ['PHP_SELF'] );
	$name = 'registration-form';
	
	$pass1 = str_replace ( '[+action+]', $self, $tpl );
	$final = str_replace ( '[+name+]', $name, $pass1 );
	
	echo $final;
