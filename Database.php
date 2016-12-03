<?php

require_once 'conexion.php';

class Database{
	protected $_connection;


	public function __construct( $connection ){
		$this->_connection = $connection;
	}
	public function execute ( $query ){

		if ( $results = mysql_query( $query ) ){
			return $results;
		}

		return false;
	}

}