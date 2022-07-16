<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
?>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
 <script>window.jQuery || document.write('<script src="../public/js/jquery-3.1.1.min.js"><\/script>')</script>
    <!-- DATATABLES -->
    <script src="../public/datatables/jquery.dataTables.min.js"></script>    
    <script src="../public/datatables/dataTables.buttons.min.js"></script>
    <script src="../public/datatables/buttons.html5.min.js"></script>
    <script src="../public/datatables/buttons.colVis.min.js"></script>
    <script src="../public/datatables/jszip.min.js"></script>
    <script src="../public/datatables/pdfmake.min.js"></script>
    <script src="../public/datatables/vfs_fonts.js"></script> 

    <script src="../public/js/bootbox.min.js"></script> 
    <script src="../public/js/bootstrap-select.min.js"></script>  


    <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Imagenes top <button class="btn btn-success" id="btnagregar1" onclick="mostrarform1(true)"><i class="fa fa-plus-circle"></i> Agregar</button--></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros1">
                        <table id="tbllistado1" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Conocenos</th>
                            <th>Blog</th>
                            <th>Carrito</th>
                            <th>Contactanos</th>
                            <th>Pagina de inicio</th>
                            <th>Detalle producto</th>
                            <th>Productos</th>
                            <th>Categorias</th>
                            <th>Registro</th>
                            <th>Tips & más</th>
                            <th>Tips & más</th>
                            <th>Tips & más</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>

                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros12">
                        <form name="formulario1" id="formulario1" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Conocenos:</label>
                            <input type="hidden" name="id_top" id="id_top">
                            <input type="file" class="form-control" name="conocenos" id="conocenos" >
                            <input type="hidden" name="ia1" id="ia1">
                            <img src="" width="150px" height="120px" id="im1">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Blog:</label>
                            <input type="file" class="form-control" name="blog" id="blog" >
                            <input type="hidden" name="ia2" id="ia2">
                            <img src="" width="150px" height="120px" id="im2">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Carrito:</label>
                            <input type="file" class="form-control" name="car" id="car" >
                            <input type="hidden" name="ia3" id="ia3">
                            <img src="" width="150px" height="120px" id="im1">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Contactanos:</label>
                            <input type="file" class="form-control" name="contact" id="contact" >
                            <input type="hidden" name="ia4" id="ia4">
                            <img src="" width="150px" height="120px" id="im4">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Pagina de inicio:</label>
                            <input type="file" class="form-control" name="inicio" id="inicio" >
                            <input type="hidden" name="ia5" id="ia5">
                            <img src="" width="150px" height="120px" id="im5">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Detalle producto:</label>
                            <input type="file" class="form-control" name="detp" id="detp" >
                            <input type="hidden" name="ia6" id="ia6">
                            <img src="" width="150px" height="120px" id="im6">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Productos:</label>
                            <input type="file" class="form-control" name="prod" id="prod" >
                            <input type="hidden" name="ia7" id="ia7">
                            <img src="" width="150px" height="120px" id="im7">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Categorias:</label>
                            <input type="file" class="form-control" name="cat" id="cat" >
                            <input type="hidden" name="ia8" id="ia8">
                            <img src="" width="150px" height="120px" id="im8">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Registro:</label>
                            <input type="file" class="form-control" name="rege" id="rege" >
                            <input type="hidden" name="ia9" id="ia9">
                            <img src="" width="150px" height="120px" id="im9">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tips & más:</label>
                            <input type="file" class="form-control" name="tips" id="tips" >
                            <input type="hidden" name="ia10" id="ia10">
                            <img src="" width="150px" height="120px" id="im10">
                          </div>
                          
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar12"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform1()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
require 'footer.php';
?>
<script type="text/javascript" src="script/alumno.js"></script>
</body>
</html>