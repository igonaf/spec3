<?php
class User {
	public $name;
	public $login;
	public $password;

	function __construct($name, $login, $password){
		$this->name = $name;
		$this->login = $login;
		$this->password = $password;
	}

	public function showInfo(){
		echo "Current user: " . $this->name . ' with login ' . $this->login . ' and pass ' . $this->password . "<br><hr>";
	}

	function __destruct(){
		echo "User " . $this->login . " is deleted<br>";
	}
}

class SuperUser extends User {
	public $role;

	function __construct($name, $login, $password, $role){
		parent::__construct($name, $login, $password);
		$this->role = $role;
	}

	function showInfo(){
		parent::showInfo();
		echo $this->role;
	}
}

$user1 = new User('Vasya', 'Vas', '111');
$user2 = new User('Petya', 'Pet', '222');
$user3 = new User('Kolya', 'Kol', '333');

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user =new SuperUser('SuperVasya', 'SVas', '222111', 'admin');
$user->showInfo();