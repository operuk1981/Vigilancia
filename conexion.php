<?php

class Conexion
{
    protected $connection;

	protected $user;

	protected $host;

	protected $pass;

    protected $results;

	public function __construct($host, $user, $pass, $db )
    {
		$this->host = $host;
		$this->user = $user;
    	$this->pass = $pass;
    	$this->db   = $db;
    
    }

    
    public function connect()
    {
        
    	$this->connection = mysql_connect( $this->host, $this->user, $this->pass );
        
        mysql_select_db($this->db, $this->connection);
    
    }

    public function execute ( $query ){

        if ( $results = mysql_query( $query ) ){

            return $this->results = $results;
        }else{
                echo mysql_errno($this->connection) . ": " . mysql_error($this->connection). "\n";
        } 

        return false;
    } 

    public function getResults(){
        $arr = [];
        while ( $data = mysql_fetch_array( $this->results ) ) {

            /*ARRAY INDEXADO [0-2]*/
            /*echo "<pre>";
            print_r($data);
            exit();
            */
            $res['persona_id'] = $data['persona_id'];
            $res['patente'] = $data['patente'];
            

            /* ARRAY ASOCIAYIVO nombre de la columna*/
            /* 
            $res ['id'] = $data['id_vehiculo'];
            $res ['patente'] = $data['dominio'];
            /*FOREIGN KEY: CLAVE EXTERNA */
            //$res ['fk_persona'] = $data['persona'];
            $arr[] = $res; 
        }
        return $arr;
    }
}
