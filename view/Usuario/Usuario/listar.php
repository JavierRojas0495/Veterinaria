    
    <div class="col-lg-12">
        <h1 class="page-header">Usuarios    </h1>
    </div>
    
                        
    
        <div class="form-group">
            
            <table class="table table-bordered table-striped border-primary">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Javier Andres</td>
                        <td>Rojas Erazo</td>
                        <td>1144192322</td>
                        <td>3173280247</td>
                        <td>Calle 46 #10-51</td>
                    </tr>
                    <tr>
                        <td>Javier Andres</td>
                        <td>Rojas Erazo</td>
                        <td>1144192322</td>
                        <td>3173280247</td>
                        <td>Calle 46 #10-51</td>
                    </tr>
                    <tr>
                        <td>Javier Andres</td>
                        <td>Rojas Erazo</td>
                        <td>1144192322</td>
                        <td>3173280247</td>
                        <td>Calle 46 #10-51</td>
                    </tr>
                    <?php
                    /*
                        foreach($productosBd as $producto){
                            echo 
                              "<tr>"
                                . "<td>" . $producto['producto']['pro_nombre'] . "</td>"
                                . "<td>" . $producto['producto']['pro_descripcion'] . "</td>"
                                . "<td>" . $producto['producto']['pro_anio'] . "</td>"
                                . "<td>" . $producto['producto']['pro_jugadores'] . "</td>"
                                . "<td>"; 
                            foreach($producto['genero'] as $genero){
                                echo $genero['gen_descripcion']."<br>";
                            } 
                            echo "</td>"
                                . "<td>"; 
                            foreach($producto['plataforma'] as $plataforma){
                                echo $plataforma['pla_descripcion']."<br>";
                            } 
                            echo "</td>"
                                . "<td>" . $producto['producto']['pro_precio'] . "</td>"
                                . "<td>" . $producto['producto']['pro_cantidad'] . "</td>"
                                . "<td><button type='button' class='btn btn-success agregarCarrito' data-valor='" . $producto['producto']['pro_id'] . "' data-url='" . getUrl("Venta","Carrito","agregar",false,"ajax") . "'>Comprar</button></td>"
                            . "</tr>";
                        }
                    */
                    ?>
                </tbody>
            </table>
        </div>
                
    