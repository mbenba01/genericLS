<?php

require_once 'registeration.php';

class RegistrationUI {
	
	protected $registrationForm;
	protected $action;
	
	public function RegistrationUI() {
		$this->action = htmlentities( $_SERVER ['PHP_SELF'] );
		$this->registrationForm = new RegistrationForm('registration', $action, 'post');
		
	}
	
	public function displayForm() {
		
		print $this->form;
		
	}
	
}

class RegistrationForm {
	
	private $formName;
	private $formAction;
	private $formMethod;
	private $name;
	private $email;
	private $username;
	private $password;
	private $confirmedPassword;
	
	function __construct($formName, $formAction, $formMethod) {
		
		$this->formName = $formName;
		$this->formAction = $formAction;
		$this->formMethod = $formmethod;
		
	}
	
	function printForm() {
		
		$form = '<form action="' . $this->forAction . '" method="' . $this->formMethod . '" name="' . $this->formName . '">
					<fieldset>
					<legend>Registration Form</legend>
						<p><label for="name">Name</label></p>
						<p><input name="name" type="text" size="55" maxlength="65" required id="name" placeholder="Enter Full Name...">' . ' ' . $this->name . '</p>
						<p><label for="email">Email</label></p>
						<p><input name="email" type="text" id="email" size="55" maxlength="65" required placeholder="Must be a valid email...">' . ' ' . $this->email . '</p>
						<p><label for="username">Username</label></p>
						<p><input name="username" type="text" id="username" size="55" maxlength="65" required>' . ' ' . $this->username . '</p>
						<p><label for="pswd">Password</label></p>
						<p><input name="password" type="password" id="pswd" size="55" maxlength="65" required>' . ' ' . $this->password . '</p>
						<p><label for="cpswd">Confirm password</label></p>
						<p><input name="password_confirmation" type="password" id="cpswd" size="55" maxlength="65" required>' . ' ' . $this->confirmedPassword . '</p>
						<p><input name="submit" type="submit" id="submit_btn"> (*) Required fields</p>
					</fieldset>
				</form>';
		
		print $from;
		
	}
	
	
}

function get_registration_form($action, $message_name, $message_email, $message_username, $message_pwd, $message_pwd_con) {

	echo '<form action="' . $action . '" method="post" name="reg_form">
					<fieldset>
					<legend>Registration Form</legend>
						<p><label for="name">Name</label></p>
						<p><input name="name" type="text" size="55" maxlength="65" required id="name" placeholder="Enter Full Name...">' . ' ' . $message_name . '</p>
						<p><label for="email">Email</label></p>
						<p><input name="email" type="text" id="email" size="55" maxlength="65" required placeholder="Must be a valid email...">' . ' ' . $message_email . '</p>
						<p><label for="username">Username</label></p>
						<p><input name="username" type="text" id="username" size="55" maxlength="65" required>' . ' ' . $message_username . '</p>
						<p><label for="pswd">Password</label></p>
						<p><input name="password" type="password" id="pswd" size="55" maxlength="65" required>' . ' ' . $message_pwd . '</p>
						<p><label for="cpswd">Confirm password</label></p>
						<p><input name="password_confirmation" type="password" id="cpswd" size="55" maxlength="65" required>' . ' ' . $message_pwd_con . '</p>
						<p><input name="submit" type="submit" id="submit_btn"> (*) Required fields</p>
					</fieldset>
				</form>';

}


$user = "Mustapha Benbaziz" . "," .
		"m.benbaziz@hotmail.co.uk" . "," .
		"mustapha2ieme" . "," .
		"1qaz0p;/" .
		"\n";

$registrationController = new Registeration($user);

$registrationController->register();
