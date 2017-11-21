<?php

class Conexion extends PDO
{

  private $tipo_de_base = 'mysql';
  private $host = 'sql10.freesqldatabase.com';
  private $nombre_de_base = 'sql10206206';
  private $usuario = 'sql10206206';
  private $contrasena = 'q2ImtivkbL';

  function __construct()
  {
    try
    {
         parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->contrasena);
    }
    catch(PDOException $e)
    {
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
    }
  }

}

?>
