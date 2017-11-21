<?php

class IndexController
{

  private $Modo;

  function __construct($modo)
  {
    $this->Modo = $modo;
  }

  public function Menu()
  {
    switch ($this->Modo)
    {
      case 'about':
        # code...
        break;

      default:
        include('view/Index/index.html');
        break;
    }
  }

}

?>
