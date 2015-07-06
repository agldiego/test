<?php
require_once('Configuracion.php');

Class BD 
{

	protected static $pdo;

	function  __construct() {
		$this->conectar();
	}

	function conectar() {
		global $settings;
		try {

	    	self::$pdo = new PDO($settings['dsn'],$settings['username'],$settings['password']);
	    	
		} catch (PDOException $e) {
			print "¡Error!: " . $e->getMessage() . "<br/>";
	    	// Database connection failed
	    	echo "Database connection failed";
	    	self::$pdo = null;
	    	exit;
		}
				
	}

	function query($sql) {
		$result = self::$pdo->query($sql);
		$result->setFetchMode(PDO::FETCH_OBJ);
		foreach ($result as $row) {
			echo "{$row->titulo}\n";
		}
	}

	function exec($sql) {
		$affected = self::$pdo->exec($sql);
	}
}

$BD = New BD();
$BD->query("SELECT * FROM blogs");