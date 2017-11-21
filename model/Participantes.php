<?php

class Participantes
{

  private $idParticipantes;
  private $nombre;
  private $apellido;
  private $ci;
  private $nick_royale;
  private $id_royale;
  private $estado;//para cancelar
  private $habilitado;//eliminado del juego
  private $foto;

  function __construct()
  {
    $this->idParticipantes = null;
    $this->foto = null;
    $this->estado = true;
    $this->habilitado = true;
  }

  public function __set($atributo, $value)
  {
    if (property_exists($this, $atributo))
    {
      $this->$atributo = $value;
    }
    else
    {
      echo "Error al encontrar Atributo SET {$atributo} .";
    }
  }

  public function __get($atributo)
  {
    if (property_exists($this, $atributo))
    {
      return $this->$atributo;
    }
    else
    {
      return "Error al encontrar Atributo GET {$atributo} .";
    }

  }

}

?>
