/* 
    Este codigo se encarga del cambio de estado del usuario por medio del click en el boton
*/
    function eliminarHistoria(id){
    var id_dato = id;
    Swal.fire({
      title: 'seguro quieres eliminar?',
      text: "No podras revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminar esto!'
        }).then((result) => {
          if (result.isConfirmed) {
            eliminarHistorialClinica(id_dato);
            Swal.fire(
              'Eliminado!',
              'La Historia ha sido eliminado.',
              'success'
             )
          }
    })
    }
    function eliminarHistorialClinica(id){
 
      var url = "index.php?modulo=HistoriaClinica&controlador=HistoriaClinica&funcion=eliminarHistorial&eliminarHistorial";
        $.ajax({
            type:"GET",
            url:url,
            data:"id_historiaclinica="+id,
            success:function(respuesta){
                setTimeout('document.location.reload()',1000);
            }
        });
    }

    function eliminarDetalleHistoria(id){
    var id_dato = id;
    Swal.fire({
      title: 'seguro quieres eliminar?',
      text: "No podras revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, eliminar esto!'
        }).then((result) => {
          if (result.isConfirmed) {
            eliminarDelleHistorialClinica(id_dato);
            Swal.fire(
              'Eliminado!',
              'El detalle ha sido eliminado.',
              'success'
             )
          }
    })
    }
    function eliminarDelleHistorialClinica(id){
 
      var url = "index.php?modulo=DetalleHistoriaClinica&controlador=DetalleHistoriaClinica&funcion=eliminarDetalleHistoria";
        $.ajax({
            type:"GET",
            url:url,
            data:{id},
            success:function(respuesta){
               setTimeout('document.location.reload()',1000);
            }
        });
    }