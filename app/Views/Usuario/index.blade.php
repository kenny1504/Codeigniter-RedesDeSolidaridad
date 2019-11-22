<?= $this->extend("theme/lte/layout.blade.php") ?><!--extiendo del layout "pagina inicio" -->

<!--agrega titulo a la pagina-->
<?=  $this -> section ( 'titulo' )  ?> 
Usuarios
<?=  $this -> endSection () ?> 

<?=  $this -> section ( 'contenido' )  ?>   <!--agrega codigo a la seccion contenido del layout-->
           
            <div class="box">
            <div class="box-header">
              <h2 class="box-title text-light-blue">Usuarios</h2>
              <a href="#" data-toggle="modal" data-target="#crear_usuario" class="btn btn-warning btn-sm pull-right" >Agregar Usario</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body panel box box-primary">
              <table id="usuarios" class="table table-bordered table-striped">
                     <thead>  <!--Header de la tabla -->  
                       <tr > 
                         <th>Nombre</th>
                         <th>Nombre de usuario</th>
                         <th>Clave de usuario</th>
                         <th>Vencimiento</th>
                       </tr>
                    </thead> 
                        <tbody> <!--Cuerpo de la tabla --> 
                        <?php foreach ($usuarios as $usuario): ?><!--ciclo que recorre el arreglo retonrnado del controlador-->
						
                                 <tr id="<?php echo $usuario['Id_Usuarios']; ?>" >  <!--abre fila-->
                                
                                    <td><?php echo $usuario['Nombre'];?></td>  <!--agrega dato a la columna-->
                                    <td><?php echo $usuario['NombreDeUsuario'];?></td>  <!--agrega dato a la columna-->
                                    <td><?php echo $usuario['ClaveDeUsuario'];?></td>  <!--agrega dato a la columna-->
                                    <td><?php echo $usuario['Cedula'];?></td>  <!--agrega dato a la columna-->
                                <td>
            <!-- Boton Nuevo--> <button class="btn btn-primary" data-toggle="modal" data-target="#perfil_usuario" onclick='' data-id="<?php echo $usuario['Id_Usuarios']; ?>" data-Nombre="<?php echo $usuario['Nombre'];?>" id="Ver-Asignaturas">ver</button>  <!--botton para ver ** Sirve para ver materias asignadas a este grado** -->     
                                <button class="btn btn-success " onclick="" data-id="<?php echo $usuario['Id_Usuarios']; ?>" data-Nombre="<?php echo $usuario['Nombre'];?>" ><i class=" fa fa-fw fa-pencil"></i></button>  <!--botton para editar -->
                                <button class="btn btn-info" onclick='' data-id="<?php echo $usuario['Id_Usuarios']; ?>" data-Nombre="<?php echo $usuario['Nombre'];?>" ><i class="fa fa-fw fa-trash "></i></button>  <!--botton para eliminar-->                            
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