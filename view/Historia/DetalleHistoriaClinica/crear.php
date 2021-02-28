
<form name="crearDetalleHistoria" method="post" action="<?php echo getUrl("DetalleHistoriaClinica","DetalleHistoriaClinica","postcrearDetalleHistoriaClinica"); ?>" enctype="multipart/form-data">
   
    <div class="col-lg-12">
            <h1 class="page-header">Crear Detalle Historial</h1>
    </div>
                        
    <input class="form-control" type="hidden" name="id_historia_clinica" id="id_historia_clinica" value="<?php echo $_GET['id_historia_clinica'] ?>" max="255" required >
    
    <div class="input-group">
            
        <div class="form-group col-md-5">
            <label>Temperatura</label>
            <input class="form-control" type="number" min="1" max"100" name="temperatura" id="temperatura" required>
            <p class="help-block">Temperatura de la mascota.</p>
        </div>
                 
        <div class="form-group col-md-5">
            <label>Peso</label>
            <input class="form-control" type="number" min="1" max"100" name="peso" id="peso" required>
            <p class="help-block">Peso de la mascota.</p>
        </div>

    </div>

    <div class="input-group">

        <div class="form-group col-md-5">
            <label>Frecuencia Cardiaca</label>
            <input class="form-control" type="number" min="1" max"100" name="frecuencia_cardiaca" id="frecuencia_cardiaca" required>
            <p class="help-block">Frecuencia cardiaca de la mascota.</p>
        </div>
        
        <div class="form-group col-md-5">
            <label>Frecuencia Respiratoria</label>
            <input class="form-control" type="number" min="1" max"100" name="frecuencia_respiratoria" id="frecuencia_respiratoria" required>
            <p class="help-block">Frecuencia respiratoria de la mascota.</p>
        </div>

    </div>

    <div class="input-group">

        <div class="form-group col-md-5">
            <label>Habitad</label>
            <input class="form-control" type="text" name="habitad" id="habitad" max="255" required >
            <p class="help-block">habitad de la mascota.</p>
        </div>

        <div class="form-group col-md-5">
            <label>Colaborador</label>
            <select class="form-control form-select" name="id_colaborador" id="id_colaborador" required >
                    <option disabled selected>Seleccione...</option>
                <?php
                    foreach ($colaboradores as $colaborador){
                ?>
                    <option value="<?php echo $colaborador['id'];?>"> <?php echo $colaborador['nombre']; ?>  </option>
                <?php
                    }
                ?>
            </select>
            <p class="help-block">Seleccione al colaborador.</p>
        </div>

    </div>

    <div class="input-group">

        <div class="form-group col-md-5">
            <label>Alimentacion</label>
            <textarea class="form-control z-depth-1" name="alimentacion" id="alimentacion" required max="255" rows="4"></textarea>
            <p class="help-block">Alimentacion de la mascota.</p>
        </div>
                
        <div class="form-group col-md-5">
            <label>Observacion</label>
            <textarea class="form-control z-depth-1" name="observacion" id="observacion" required max="255" rows="4"></textarea>
            <p class="help-block">Observaciones de la mascota.</p>
        </div>

    </div>
      
    <div class="input-group">
            
        <div class="form-group col-md-5">
            <button type="submit" class="btn btn-success">Enviar</button>
            <a href="<?php echo getUrl("DetalleHistoriaClinica", "DetalleHistoriaClinica", "listarDetalleHistoriaClinica",array('id_historia_clinica'=>$_GET['id_historia_clinica']));?>" class='btn btn-danger'>Cancelar</a></button>
        </div>
    </div>
    
 </form>