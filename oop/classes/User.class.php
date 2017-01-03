<?php
class User extends UserAbstract {
	public $name;
	public $login;
	public $password;

	public static $count=0;

	function __construct($name, $login, $password){
		$this->name = $name;
		$this->login = $login;
		$this->password = $password;
		self::$count++;

	}

	public function showInfo(){
		echo "Current user: " . $this->name . ' with login ' . $this->login . ' and pass ' . $this->password . "<br><hr>";
	}

	function __destruct(){
		echo "User " . $this->login . " is deleted<br>";
	}
}