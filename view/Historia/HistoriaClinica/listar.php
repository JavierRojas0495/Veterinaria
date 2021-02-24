
    <div class="col-lg-12">
            <h1 class="page-header"> Historia Clinica </h1>
    </div>
                      
    <div class="form-group">
            
        <table class="table table-bordered table-striped border-primary">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre Mascota</th>
                    <th>Fecha Creacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <th>Detalle</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i=0;
                        foreach($datos as $dato){
                    echo
                    "<tr>"
                    . "<td>" . $i . "</td>"
                    . "<td>" . $dato['nombre_mascota'] . "</td>"
                    . "<td>" . $dato['fecha_creacion'] . "</td>"
                    . "<td> <a href='".getUrl("HistoriaClinica", "HistoriaClinica", "editarHistorial",array("id_historiaclinica"=>$dato['id']))."' class='btn btn-primary'>Editar</a></button>"."</td>"
                    . "<td> <input type='button' class='btn btn-danger' value='Eliminar' onclick='eliminarHistoria(".$dato['id'].");'></td>"
                    . "<td> <a href='".getUrl("DetalleHistoriaClinica", "DetalleHistoriaClinica", "listarDetalleHistoriaClinica",array("id_historia_clinica"=>$dato['id']))."' class='btn btn-info'>Detalle</a></button>"."</td>"
                    ."</tr>";
                    $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>