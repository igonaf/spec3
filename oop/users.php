<?php
function __autoload($className){
	require ("classes/".$className.".class.php");
}

$user1 = new User('Vasya', 'Vas', '111');
$user2 = new User('Petya', 'Pet', '222');
$user3 = new User('Kolya', 'Kol', '333');
$user4 = new User('Kol', 'K', '33');

echo 'User-count = '.User::$count . "<br/>";

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user =new SuperUser('SuperVasya', 'SVas', '222111', 'admin');
$user2 =new SuperUser('SuperVasy', 'SVa', '2221', 'admin2');
$user->showInfo();

echo 'SuperUser-count = '.SuperUser::$superCount . "<br/>";
