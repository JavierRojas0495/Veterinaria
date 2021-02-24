<form name="editarHistorial" method="post" action="<?php echo getUrl("HistoriaClinica","HistoriaClinica","postEditarHistoriaClinica"); ?>" enctype="multipart/form-data">
   <div class="form-group">
        <div class="col-lg-12">
                <h1 class="page-header">Editar Historia Clinica</h1>
        </div>
    </div>
                        <!-- /.row -->
    <?php
        foreach($datosHistorial as $datoH){
    ?>
    <div class="form-group">
    
        <input type="hidden" required="required" name="id" id="id" value="<?php echo $datoH['id']; ?>">

            <div class="form-group col-md-6">
                <label>Nombre</label>
                <select  name="id_mascota" id="id_mascota" class="form-control" required >
                    <?php
                        foreach($datos as $mascota){
                            if($mascota['id'] == $datoH['id_mascota']){
                    ?>
                        <option value="<?php echo $mascota['id'];?>"selected="selected"> <?php echo $mascota['nombre']; ?>  </option>
                    <?php
                            }else{
                    ?>
                        <option value="<?php echo $mascota['id'];?>"> <?php echo $mascota['nombre']; ?>  </option>
                    <?php
                        }
                     }   
                    ?>
                </select>
                <p class="help-block">Nombre de la mascota.</p>
            </div>
    
            <div class="form-group col-md-6">
                <label for="bday">Fecha De Ingreso</label><br>
                <input type="date" id="fecha" name="fecha" class="form-control" value="<?php echo $datoH['fecha_creacion'] ?>" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                <p class="help-block">Fecha creacion de la historia clinica.</p>
            </div>
    </div> 
        <?php
         }
        ?>
             
    
       <div class="form-group">
            <div class="form-group-center">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>
    
 </form> 