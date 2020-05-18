<?php
class DbConnect {
	private static $db;
	
	public static function getDb() {
		return DbConnect::$db;
	}

	public static function init() {
		try {
			// On se connecte � MySQL
			self::$db= new PDO ('mysql:host=localhost;port=3306;dbname=calendrier;charset=utf8','root','');
		} catch ( Exception $e ) {
			// En cas d'erreur, on affiche un message et on arr�te tout
			die ( 'Erreur : ' . $e->getMessage () );
		}
		
	}
}