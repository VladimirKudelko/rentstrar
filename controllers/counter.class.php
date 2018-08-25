<?php

	/* 
	 * Class for count user whose visit this page
	 *
	 */

static class Count {
	public static function CheckCookie () {
		if ( isset ($_COOKIE ['viewC']) ) {
			if ( password_verify ($_SERVER ['REMOTE_ADDR'], $_COOKIE ['sUser']) ) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	public static function AddCookie () {
		setcookie ('viewC', password_hash($_SERVER ['REMOTE_ADDR'], PASSWORD_DEFAULT), time () + 1600, '/');
	}
}