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
                          <h1 class="box-title">Bets <button class="btn btn-success" id="btnadd" onclick="showform(true)"><i class="fa fa-plus-circle"></i> Add</button--></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="betlist">
                        <table id="tblist" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>id</th>
                            <th>'Red team' name</th>
                            <th>'Blue team' name:</th>
                            <th>Amount in favor of red:</th>
                            <th>Amount in favor of blue:</th>
                            <th>Availability</th>
                            <th>Game</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>

                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="betform">
                        <form name="formulario1" id="betform1" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>id:</label>
                            <input type="hidden" name="betid" id="betid">
                            <input type="input" class="form-control" name="conocenos" id="conocenos" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>'Red team' name:</label>
                            <input type="input" class="form-control" name="redname" id="redname" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>'Blue team' name:</label>
                            <input type="input" class="form-control" name="bluename" id="bluename" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Amount in favor of red:</label>
                            <input type="input" class="form-control" name="redwins" id="redwins" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Amount in favor of blue:</label>
                            <input type="input" class="form-control" name="bluewins" id="bluewins" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Availability:</label>
                            <input type="input" class="form-control" name="available" id="available" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Game:</label>
                            <input type="input" class="form-control" name="game" id="game" >
                          </div>
                          
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnsave"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelForm()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
<script type="text/javascript" src="scripts/bet.js"></script>
</body>
</html>