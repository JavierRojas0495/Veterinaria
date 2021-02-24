
<form rule="form" name="crearProducto" method="post" action="<?php echo getUrl("Usuario","Usuario","postCrearUsuario"); ?>" enctype="multipart/form-data">
     
     <div class="form-group">
            <div class="form-group">
                    <h1 class="page-header">Crear Usuario</h1>
            </div>
    
             <div class="input-group">   

                <div class="form-group col-md-5">
                    <label>Nombre</label>
                    <input class="form-control" name="pro_nombre">
                    <p class="help-block">Nombre del usuario.</p>
                </div>
                 
                <div class="form-group col-md-5">
                    <label>Apellido</label>
                    <input class="form-control" name="pro_anio" type="number">
                    <p class="help-block">Apellidos del usuario.</p>
                </div>

             </div>
        
             <div class="input-group">   
           
                <div class="form-group col-md-5">
                    <label>Tipo Documento</label>
                    <input class="form-control" name="pro_precio" type="number">
                    <p class="help-block">Cedula del usuario.</p>
                </div>
        
                <div class="form-group col-md-5">
                    <label>Numero Documento</label>
                    <input class="form-control" name="pro_precio" type="number">
                    <p class="help-block">Cedula del usuario.</p>
                </div>

             </div>

             <div class="input-group">

                <div class="form-group col-md-5">
                    <label>Estado</label><br>
                    <select class="form-control form-select" aria-label="Default select example">
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                    <p class="help-block">Estado del usuario.</p>
                </div>

                <div class=" form-group col-md-5">
                    <label>Sexo</label><br>
                    <select class="form-control form-select" aria-label="Default select example">
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>
                    <p class="help-block">Sexo del usuario.</p>
                </div>

              </div>
    
            <div class="input-group">  
                <div class="form-group col-md-5">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </div>
 </form>