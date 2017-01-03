<?php
class SuperUser extends User implements ISuperUser {
	public $role;
	public static $superCount=0;

	function __construct($name, $login, $password, $role){
		parent::__construct($name, $login, $password);
		$this->role = $role;
		self::$superCount++;
	}

	function showInfo(){
		parent::showInfo();
		echo $this->role;
	}

	function getInfo(){
		
	}
}