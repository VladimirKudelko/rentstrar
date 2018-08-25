<?php

	/*
	 * Admin.class.php - Admin Controller
	 * Methods to work with admin API
	 *
	 */

class Admin {
	private $login;
	private $pass;
	private $token;
	private $status;

	// construct
	// On this method you can change login and pass
	function __construct () {
		$this->login = 'admin';
		$this->pass = 'admin';
		$this->token = '';
		$this->status = false;
	}
	// destruct
	function __destruct () {
		unset ($this->login);
		unset ($this->pass);
		unset ($this->token);
		unset ($this->status);
	}

	function Auth ( $_login, $_pass, $_token ) {
		if ( $this->status === true ) {
			return true;
		} else {
			if (
				$this->login === $_login &&
				$this->pass === $_pass
			) {
				$this->status = true;
				$this->token = $_token;
				return true;
			} else {
				return false;
			}
		}
	}

	function Logout () {
		unset ($this->login);
		unset ($this->pass);
		unset ($this->token);
		unset ($this->status);
	}
}