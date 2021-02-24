    
<a href="<?php echo getUrl("DetalleHistoriaClinica", "DetalleHistoriaClinica", "crearDetalleHistoriaClinica",array('id_historia_clinica'=>$_GET['id_historia_clinica']));?>" class='btn btn-info'>Nuevo Detalle Historial</a></button>
    
    <div class="col-lg-12">
            <h1 class="page-header"> Detalle Historia Clinica </h1>
    </div>
    
        <div class="form-group">
            
            <table class="table table-bordered table-striped border-primary">
                <thead>
                    <tr>
                        <th>*</th>
                        <th>Temperatura</th>
                        <th>Peso</th>
                        <th>Frecuencia Cardiaca</th>
                        <th>Frecuencia Respiratoria</th>
                        <th>Fecha Y Hora</th>
                        <th>Colaborador</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i=0;
                            foreach($datos as $dato){
                        echo
                      "<tr>"
                        . "<td>" . $i . "</td>"
                        . "<td>" . $dato['temperatura'] . "</td>"
                        . "<td>" . $dato['peso'] . "</td>"
                        . "<td>" . $dato['frecuencia_cardiaca'] . "</td>"
                        . "<td>" . $dato['frecuencia_respiratoria'] . "</td>"
                        . "<td>" . $dato['hora_fecha'] . "</td>"
                        . "<td>" . $dato['nombre_colaborador'] ."</td>"
                        . "<td> <a href='".getUrl("DetalleHistoriaClinica", "DetalleHistoriaClinica", "editarDetalleHistoria",array("id_detalle_historia_clinica"=>$dato['id']))."' class='btn btn-primary'>Editar</a></button>"."</td>"
                        . "<td> <input type='button' class='btn btn-danger' value='Eliminar' onclick='eliminarDetalleHistoria(".$dato['id'].");'></td>"
                       ."</tr>";
                       $i++;
                        }
                    ?>
                </tbody>
            </table>
        </div>