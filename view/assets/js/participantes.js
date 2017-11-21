$(document).ready(function ()
  {
    registrarParticipante();
  }
);

function registrarParticipante()
{
  $('#fromulario_registro_royale').submit(function (e)
    {
      e.preventDefault();
      var datos = $(this).serialize();
      $('#respuesta_registro_royale').html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');
      $.ajax({
        "method" : "Post",
        "url" : "controller/ParticipantesController.php?modo=registrar",
        "data" : datos
      }).done(function (info)
        {
          switch (info)
          {
            case '2':
              $('#respuesta_registro_royale').html('<h4 class="text-center" style="color:orange">El código o team(equipo) ya existe</h4>');
              break;

            case '1':
              $('#respuesta_registro_royale').html('<h4 class="text-center" style="color:red">Error inesperado</h4>');

              break;
            case '0':
              $('#respuesta_registro_royale').html('<h4 class="text-center" style="color:green">Registro exitoso</h4>');

              break;

            default:
              $('#respuesta_registro_royale').html(info);

              break;
          }
        }
      );
    }
  );
}
