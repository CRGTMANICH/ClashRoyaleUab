<?php

class ParticipantesManejador
{

  private $Conexion;

  function __construct($con)
  {
    $this->Conexion = $con;
  }

  public function guardar($participantes)
  {
    //var_dump($participantes);
    try
    {
      $this->Conexion->beginTransaction();
      $query = "INSERT INTO participantes VALUES(:idParticipantes, :nombre, :apellido, :ci, :nick_royale, :id_royale, :estado, :habilitado, :foto)";
      $stmt = $this->Conexion->prepare($query);
      $stmt->bindValue(':idParticipantes', $participantes->idParticipantes);
      $stmt->bindValue(':nombre', $participantes->nombre);
      $stmt->bindValue(':apellido', $participantes->apellido);
      $stmt->bindValue(':ci', $participantes->ci);
      $stmt->bindValue(':nick_royale', $participantes->nick_royale);
      $stmt->bindValue(':id_royale', $participantes->id_royale);
      $stmt->bindValue(':estado', $participantes->estado);
      $stmt->bindValue(':habilitado', $participantes->habilitado);
      $stmt->bindValue(':foto', $participantes->foto);
      $stmt->execute();
      $this->Conexion->commit();
      return 0;
    }
    catch (PDOException $e)
    {
      $this->Conexion->rollback();
      return 1;
      //debug echo "<h2 class='text-center' style='color:red'><strong>CLash Royale --> Error con la consultar DB: </strong></h2><br /><pre>{$e}</pre>";
    }

  }

  public function editar()
  {
    try
    {
      $this->Conexion->beginTransaction();
      $query = "";
      $stmt = $this->Conexion->prepare($query);
      $stmt->execute();
      $this->Conexion->commit();
    }
    catch (PDOException $e)
    {
      $this->Conexion->rollback();
      echo "<h2 class='text-center' style='color:red'><strong>CLash Royale --> Error con la consultar DB: </strong></h2><br /><pre>{$e}</pre>";
    }

  }

  public function activar()
  {
    try
    {
      $this->Conexion->beginTransaction();
      $query = "";
      $stmt = $this->Conexion->prepare($query);
      $stmt->execute();
      $this->Conexion->commit();
    }
    catch (PDOException $e)
    {
      $this->Conexion->rollback();
      echo "<h2 class='text-center' style='color:red'><strong>CLash Royale --> Error con la consultar DB: </strong></h2><br /><pre>{$e}</pre>";
    }

  }

  public function desactivar()
  {
    try
    {
      $this->Conexion->beginTransaction();
      $query = "";
      $stmt = $this->Conexion->prepare($query);
      $stmt->execute();
      $this->Conexion->commit();
    }
    catch (PDOException $e)
    {
      $this->Conexion->rollback();
      echo "<h2 class='text-center' style='color:red'><strong>CLash Royale --> Error con la consultar DB: </strong></h2><br /><pre>{$e}</pre>";
    }

  }

  public function deshabilitar()
  {
    try
    {
      $this->Conexion->beginTransaction();
      $query = "";
      $stmt = $this->Conexion->prepare($query);
      $stmt->execute();
      $this->Conexion->commit();
    }
    catch (PDOException $e)
    {
      $this->Conexion->rollback();
      echo "<h2 class='text-center' style='color:red'><strong>CLash Royale --> Error con la consultar DB: </strong></h2><br /><pre>{$e}</pre>";
    }

  }

  public function habilitar()
  {
    try
    {
      $this->Conexion->beginTransaction();
      $query = "";
      $stmt = $this->Conexion->prepare($query);
      $stmt->execute();
      $this->Conexion->commit();
    }
    catch (PDOException $e)
    {
      $this->Conexion->rollback();
      echo "<h2 class='text-center' style='color:red'><strong>CLash Royale --> Error con la consultar DB: </strong></h2><br /><pre>{$e}</pre>";
    }

  }

  public function listar()
  {
    try
    {
      $this->Conexion->beginTransaction();
      $query = "";
      $stmt = $this->Conexion->prepare($query);
      $stmt->execute();
      $this->Conexion->commit();
    }
    catch (PDOException $e)
    {
      $this->Conexion->rollback();
      echo "<h2 class='text-center' style='color:red'><strong>CLash Royale --> Error con la consultar DB: </strong></h2><br /><pre>{$e}</pre>";
    }

  }

  public function existe_guardar($codigo, $team)
  {
    $query = "SELECT idParticipantes
              FROM participantes
              WHERE ci = :codigo";
    $stmt = $this->Conexion->prepare($query);
    $stmt->bindValue(':codigo', $codigo);
    $stmt->execute();
    $registro = $stmt->fetch();
    if ($registro)
    {
      return true;
    }
    else
    {
      $query = "SELECT count(apellido) as cantidad
                FROM participantes
                WHERE apellido = :team";
      $stmt = $this->Conexion->prepare($query);
      $stmt->bindValue(':team', $team);
      $stmt->execute();
      $registro = $stmt->fetch();
      if ($registro['cantidad']>=2)
      {
        return true;
      }
      else
      {
        return false;
      }
    }
  }

  public function existe_editar()
  {
    try
    {
      $this->Conexion->beginTransaction();
      $query = "";
      $stmt = $this->Conexion->prepare($query);
      $stmt->execute();
      $this->Conexion->commit();
    }
    catch (PDOException $e)
    {
      $this->Conexion->rollback();
      echo "<h2 class='text-center' style='color:red'><strong>CLash Royale --> Error con la consultar DB: </strong></h2><br /><pre>{$e}</pre>";
    }

  }

  // public function esIngenieria()//con servicio
  // {
  //   try
  //   {
  //     $this->Conexion->beginTransaction();
  //     $query = "";
  //     $stmt = $this->Conexion->prepare($query);
  //     $stmt->execute();
  //     $this->Conexion->commit();
  //   }
  //   catch (PDOException $e)
  //   {
  //     $this->Conexion->rollback();
  //     echo "<h2 class='text-center' style='color:red'><strong>CLash Royale --> Error con la consultar DB: </strong></h2><br /><pre>{$e}</pre>";
  //   }
  //
  // }

  public function ver()
  {
    try
    {
      $this->Conexion->beginTransaction();
      $query = "";
      $stmt = $this->Conexion->prepare($query);
      $stmt->execute();
      $this->Conexion->commit();
    }
    catch (PDOException $e)
    {
      $this->Conexion->rollback();
      echo "<h2 class='text-center' style='color:red'><strong>CLash Royale --> Error con la consultar DB: </strong></h2><br /><pre>{$e}</pre>";
    }

  }

}

?>
