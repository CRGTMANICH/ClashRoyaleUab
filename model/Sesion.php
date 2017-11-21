<?php

class Sesion
{

  private $Usuario;

  function __construct($usuario)
  {
      $this->Usuario = $usuario;
  }

  public function crearSession()
  {
    $_SESSION['idUsuario'] = $this->Usuario->idUsuario;
    $_SESSION['usuario'] = $this->Usuario->usuario;
    $_SESSION['contrasena'] = $this->Usuario->contrasena;
    $_SESSION['estado'] = $this->Usuario->estado;
    $_SESSION['idTipoUsuario'] = $this->Usuario->idTipoUsuario;
  }

}

?>
