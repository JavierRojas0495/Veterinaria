<form name="editarDetalleHistoria" method="post" action="<?php echo getUrl("DetalleHistoriaClinica","DetalleHistoriaClinica","posteditarDetalleHistoriaClinica"); ?>" enctype="multipart/form-data">
   <div class="row">
        <div class="col-lg-12">
                <h1 class="page-header">Editar Detalle Historial</h1>
        </div>
    </div>
                        <!-- /.row -->
     <?php foreach($datos as $dato){ ?>

     <input class="form-control" type="hidden" name="id_historia_clinica" id="id_historia_clinica" value="<?php echo $dato['id_historia_clinica']?>" max="255" required >
     <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $dato['id']?>" max="255" required >

    <div class="row"> 
        <div class="form-group">
            
            <div class="row col-lg-5">
                <label>Temperatura</label>
                <input class="form-control" type="number" min="1" max"100" name="temperatura" id="temperatura" value="<?php echo $dato['temperatura']?>" required>
                <p class="help-block">Temperatura de la mascota.</p>
            </div>
                 <div class="row col-lg-1">
            </div>

            <div class="row col-lg-5">
                <label>Peso</label>
                <input class="form-control" type="number" min="1" max"100" name="peso" id="peso" value="<?php echo $dato['peso']?>" required>
                <p class="help-block">Peso de la mascota.</p>
            </div>

        </div>

        <div class="form-group">
            <div class="row col-lg-1">
        </div>
            <div class="row col-lg-5">
                <label>Frecuencia Cardiaca</label>
                <input class="form-control" type="number" min="1" max"100" name="frecuencia_cardiaca" id="frecuencia_cardiaca" value="<?php echo $dato['frecuencia_cardiaca']?>" required>
                <p class="help-block">Frecuencia cardiaca de la mascota.</p>
            </div>
        </div>

        
        <div class="form-group">
            <div class="row col-lg-1">
        </div>
            
            <div class="row col-lg-5">
                <label>Frecuencia Respiratoria</label>
                <input class="form-control" type="number" min="1" max"100" name="frecuencia_respiratoria" id="frecuencia_respiratoria" value="<?php echo $dato['frecuencia_respiratoria']?>" required>
                <p class="help-block">Frecuencia respiratoria de la mascota.</p>
            </div>

           <div class="row col-lg-5">
                <label>Habitad</label>
                <input class="form-control" type="text" name="habitad" id="habitad" max="255" value="<?php echo $dato['habitad']?>" required >
                <p class="help-block">habitad de la mascota.</p>
            </div>

            <div class="row col-lg-1"> </div>
            
            <div class="row col-lg-5">
                <label>Colaborador</label>
                <select class="form-control" name="id_colaborador" id="id_colaborador" required >
                      <option disabled selected>Seleccione...</option>
                    <?php
                        foreach ($colaboradores as $colaborador){
                            if($dato['id_colaborador'] == $colaborador['id'] ){
                    ?>
                        <option value="<?php echo $colaborador['id'];?>" selected="selected"> <?php echo $colaborador['nombre']; ?>  </option>
                    <?php
                            }else{
                    ?>
                        <option value="<?php echo $colaborador['id'];?>"> <?php echo $colaborador['nombre']; ?>  </option>
                    <?php 
                            }
                        }
                    ?>
                </select>
                <p class="help-block">Seleccione al colaborador.</p>
            </div>

            <div class="row col-lg-5">
                <label>Alimentacion</label>
                <textarea class="form-control rounded-0" name="alimentacion" id="alimentacion" required max="255" rows="4"><?php echo $dato['alimentacion']?></textarea>
                <p class="help-block">Alimentacion de la mascota.</p>
            </div>
                
                <div class="row col-lg-1"> </div>

            <div class="row col-lg-5">
                <label>Observacion</label>
                <textarea class="form-control rounded-0" name="observacion" id="observacion" required max="255" rows="4"><?php echo $dato['observacion']?></textarea>
                <p class="help-block">Observaciones de la mascota.</p>
            </div>
        </div>
</div>        
    <div class="row">
       <div class="form-group">
            
            <div class="row col-lg-1-center">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a href="<?php echo getUrl("DetalleHistoriaClinica", "DetalleHistoriaClinica", "listarDetalleHistoriaClinica",array('id_historia_clinica'=>$dato['id_historia_clinica']));?>" class='btn btn-danger'>Cancelar</a></button>
            </div>
        </div>
    </div>
    <?php }?>
 </form>