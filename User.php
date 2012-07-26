<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author YBD
 */
class User {
	private $userName;
	private $password;
	private $firstName;
	private $lastName;
	private $ownCar;
	private $emailAddress;

	function __construct ($userName) {
		$this->userName;
		echo "Welcome to MPG " . $userName;
	
	}
	
	function show () {
		echo "Username: " . $this->userName . "<br />";
		// echo "Password: " . $this->password . "<br />";
		echo "First Name: " . $this->firstName . "<br />";
		echo "Last Name: " . $this->lastName . "<br />";
		echo "Own Car: " . $this->ownCar . "<br />";
		echo "Email Address: " . $this->emailAddress . "<br />";
	}
	
}


?>
