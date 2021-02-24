<form name="eliminarHistorial" method="post" action="<?php echo getUrl("HistoriaClinica","HistoriaClinica","postEliminarHistoriaClinica"); ?>" enctype="multipart/form-data">
   <div class="row">
        <div class="col-lg-12">
                <h1 class="page-header">Eliminar Historia Clinica</h1>
        </div>
    </div>
                        <!-- /.row -->
    <?php
        foreach($datosHistorial as $datoH){
    ?>
    <div class="row"> 
        <input type="hidden" required="required" name="id" id="id" value="<?php echo $datoH['id']; ?>">
        <div class="form-group">
            <div class="row col-lg-4">
                <label>Nombre</label>
                 <input type="hidden" name="id_mascota" id="id_mascota" class="form-control" required="required" readonly="" value="<?php echo $datoH['id_mascota']; ?>">
                 <input type="text" name="nombre_mascota" id="nombre_mascota" class="form-control" required="required" readonly="" value="<?php echo $datoH['nombre_mascota']; ?>">        
                <p class="help-block">Nombre de la mascota.</p>
            </div>
    
            <div class="form-group col-lg-7">
                <div class="row col-lg-7">
                    <label for="bday">Fecha De Ingreso</label><br>
                    <input type="date" id="fecha" name="fecha" class="form-control" readonly="" value="<?php echo $datoH['fecha_creacion'] ?>" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                    <span class="validity"></span>
                </div>
            </div>

            </div>
                <div class="row col-lg-1">
            </div>
        </div> 
    <?php
     }
    ?>
             
    <div class="row">
       <div class="form-group">
            <div class="row col-lg-1-center">
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
       </div>
    </div>
 </form> 