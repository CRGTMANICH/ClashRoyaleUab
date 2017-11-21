<?php

class ParticipantesController
{

  private $Modo;

  function __construct($modo)
  {
    include '../model/Conexion.php';
    include '../model/Participantes.php';
    include '../model/ParticipantesManejador.php';
    $this->Modo = $modo;
  }

  public function Menu()
  {
    switch ($this->Modo)
    {
      case 'registrar':
        echo $this->registrar();
        break;

      default:
        echo "<h3 class='text-center'>Petición no reconocida</h3>";
        break;
    }
  }

  public function registrar()
  {
    $retorno = 0;
    $con = new Conexion();
    $participanteManejador = new ParticipantesManejador($con);
    if ($participanteManejador->existe_guardar($_POST['ci'], $_POST['apellido']) == false)
    {
      $participante = new Participantes();
      $participante->nombre = $_POST['nombre'];
      $participante->apellido = $_POST['apellido'];
      $participante->ci = $_POST['ci'];
      $participante->nick_royale = $_POST['nick_royale'];
      $participante->id_royale = $_POST['id_royale'];
      $retorno = $participanteManejador->guardar($participante);
    }
    else
    {
      $retorno = 2;
    }
    return $retorno;
  }

}

if (isset($_GET['modo']))
{
  $particiapanteController =  new ParticipantesController($_GET['modo']);
  $particiapanteController->Menu();
}
else
{
  echo "<h3 class='text-center'>Petición no reconocida</h3>";
}

?>
