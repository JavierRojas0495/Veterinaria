
<form name="crearHistoria" method="post" action="<?php echo getUrl("HistoriaClinica","HistoriaClinica","postHistoriaClinica"); ?>" enctype="multipart/form-data">
   
        <div class="col-lg-12">
                <h1 class="page-header">Crear Historia Clinica</h1>
        </div>
   
        <div class="form-group">

            <div class="form-group col-md-6">
                <label>Nombre</label>
                <select  name="id" id="id" class="form-control" required >
                      <option disabled selected>Seleccione...</option>
                    <?php
                        foreach ($datos as $mascota){
                    ?>
                        <option value="<?php echo $mascota['id'];?>"> <?php echo $mascota['nombre']; ?>  </option>
                    <?php
                        }
                    ?>
                </select>
                <p class="help-block">Nombre de la mascota.</p>
            </div>

            
            <div class="form-group col-md-6">
                <label for="bday">Fecha De Ingreso</label><br>
                <input type="date" id="fecha" name="fecha" class="form-control" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                <p class="help-block">Fecha creacion de la historia clinica.</p>
            </div>
            
        </div>
    
            <div class="form-group">
                <div class="form-group-center">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>

        
 </form>