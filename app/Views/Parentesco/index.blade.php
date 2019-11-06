<<<<<<< HEAD
<?= $this->extend("theme/lte/layout.blade.php") ?><!--extiendo del layout "pagina inicio" -->
=======
@extends("theme.$theme.layout")  <!--extiendo del layout "pagina inicio" -->
<!--prueba-->
>>>>>>> d721cc07f3f41152e20b01d963187a036b329799
<!--agrega titulo a la pagina-->
<?=  $this -> section ( 'titulo' )  ?> 
parentescos
<?=  $this -> endSection () ?> 

<?=  $this -> section ( 'contenido' )  ?>   <!--agrega codigo a la seccion contenido del layout-->
           
            <div class="box">
            <div class="box-header">
              <h2 class="box-title text-light-blue">Parentescos</h2>
              <a href="#" data-toggle="modal" data-target="#modal_Parentesco" class="btn btn-warning btn-sm pull-right" id="m2">Agregar Parentesco</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body panel box box-primary">
              <table id="parentescos" class="table table-bordered table-striped">
                     <thead>  <!--Header de la tabla -->  
                       <tr > 
                         <th>Lista</th>
                         <th></th>
                       </tr>
                    </thead> 
                        <tbody> <!--Cuerpo de la tabla --> 
                        <?php foreach ($parentescos as $parentesco): ?><!--ciclo que recorre el arreglo retonrnado del controlador-->
						
                                 <tr id="<?php echo $parentesco['id']; ?>" >  <!--abre fila-->
                                    <td><?php echo $parentesco['parentesco'];?></td>  <!--agrega dato a la columna-->
                                <td>
                                <button class="btn btn-success " onclick="editar_parentesco(this);" data-id="<?php echo $parentesco['id']; ?>" data-Nombre="<?php echo $parentesco['parentesco'];?>" ><i class=" fa fa-fw fa-pencil"></i></button>  <!--botton para editar -->
                                <button class="btn btn-info" onclick='eliminar_parentesco(this);' data-id="<?php echo $parentesco['id']; ?>" data-Nombre="<?php echo $parentesco['parentesco'];?>" ><i class="fa fa-fw fa-trash "></i></button>  <!--botton para eliminar-->                                   
                                </td>
                                </tr>
                        
						              <?php endforeach; ?>
                        </tbody>                        
              </table>
              <?= $pager->links() ?> <!--Paginacion-->
            </div>
            <div class="panel box box-primary"></div>
            <!-- /.box-body -->
          </div>  
<?=  $this -> endSection () ?> 