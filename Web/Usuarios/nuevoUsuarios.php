<div class="box-header">
        <i class="fa fa-user" aria-hidden="true"> Usuarios:</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
            <button class="btn btn-info btn-sm btncerrar2" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
        </div><!-- /. tools -->
    </div>
    <div class="box-body">

        <div align ="center">
                <div id="actual"> 
                </div>
        </div>


        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="frol">


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ID">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ID" name="ID" placeholder="Ingrese Codigo"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="USUARIO">Usuario:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="USUARIO" name="USUARIO" placeholder="Ingrese Nombre Usuario"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CLAVE">Clave:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="CLAVE" name="CLAVE" placeholder="Ingrese la clave"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ID_ROL">Rol:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ID_ROL" name="ID_ROL" placeholder="Ingrese El Rol"
                            value = "">
                        </div>
                    </div>

                     <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar rol">Grabar Usuario</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

                    <input type="hidden" id="nuevo" value="nuevor" name="accion"/>
            </fieldset>

        </form>
    </div>