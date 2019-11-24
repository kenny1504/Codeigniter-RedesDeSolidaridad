<?= $this->extend("theme/lte/layout.blade.php") ?><!--extiendo del layout "pagina inicio" -->
<!--agrega titulo a la pagina-->
<?=  $this -> section ( 'titulo' )  ?> 
Asignaturas
<?=  $this -> endSection () ?> 
<<<<<<< Updated upstream
<?=  $this -> section ( 'contenido' )  ?>   <!--agrega codigo a la seccion contenido del layout-->     
=======

<?=  $this -> section ( 'contenido' )  ?>   <!--agrega codigo a la seccion contenido del layout-->
           
>>>>>>> Stashed changes
            <div class="box">
            <div class="box-header">
              <h2 class="box-title text-light-blue">Asignaturas</h2>
              <a href="#" data-toggle="modal" data-target="#modal_Materia" class="btn btn-warning btn-sm pull-right" id="m2">Agregar asignatura</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body panel box box-primary">
              <table id="asignaturas" class="table table-bordered table-hover">
                     <thead>  <!--Header de la tabla -->  
                       <tr > 
                         <th>Nombre Asignatura</th>
                         <th></th>
                       </tr>
                    </thead> 
                        <tbody> <!--Cuerpo de la tabla --> 
<<<<<<< Updated upstream
                        <?php foreach ($asignaturas as $asignatura): ?><!--ciclo que recorre el arreglo retonrnado del controlador-->					
=======
                        <?php foreach ($asignaturas as $asignatura): ?><!--ciclo que recorre el arreglo retonrnado del controlador-->
						
>>>>>>> Stashed changes
                                 <tr id="<?php echo $asignatura['id']; ?>" >  <!--abre fila-->
                                    <td><?php echo $asignatura['Nombre'];?></td>  <!--agrega dato a la columna-->
                                <td>
                                <button class="btn btn-success " onclick="editar_Materia(this);" data-id="<?php echo $asignatura['id']; ?>" data-Nombre="<?php echo $asignatura['Nombre'];?>" ><i class=" fa fa-fw fa-pencil"></i></button>  <!--botton para editar -->
                                <button class="btn btn-info" onclick='eliminar(this);' data-id="<?php echo $asignatura['id']; ?>" data-Nombre="<?php echo $asignatura['Nombre'];?>" ><i class="fa fa-fw fa-trash "></i></button>  <!--botton para eliminar-->                                   
                                </td>
                                </tr>
<<<<<<< Updated upstream
=======
                        
>>>>>>> Stashed changes
						              <?php endforeach; ?>
                        </tbody>                        
              </table>
              <?= $pager->links() ?> <!--Paginacion-->
            </div>
<<<<<<< Updated upstream
            <div class="panel box box-primary"></div><!-- /.box-body -->
=======
            <div class="panel box box-primary"></div>
            <!-- /.box-body -->
>>>>>>> Stashed changes
          </div>  
<?=  $this -> endSection () ?> 



