<?php

class Registration {
	
	protected $file;
	protected $mode;
	protected $data;
	
	public function __construct($data) {
		
		$this->file = dirname(__DIR__) . '/data/user.txt';
		$this->mode = 'w';
		$this->data = $data;
		
	}
	
	public function register() {
		
		// Open the data file or create it if it does not exist
		$dataFile = fopen($this->file, $this->mode);
		
		// Test if the data file is writable
		if(is_writeable($this->file)) {
		
			try {
		
				$result = fwrite($dataFile, $this->data);
		
		
			} catch (Exception $e) {
		
				die('Error: ' . $e->getMessage());
		
			}
		
		}
		
		// Close the data file
		fclose($dataFile);
		
	}
	public function test() {
		print $this->file;
	}
	
}