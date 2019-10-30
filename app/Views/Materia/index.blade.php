@extends("theme.$theme.layout")  <!--extiendo del layout "pagina inicio" -->

<!--agrega titulo a la pagina-->
@section('titulo')  
    Asignaturas
@endsection

@section('contenido')  <!--agrega codigo a la seccion contenido del layout-->
           
            <div class="box">
            <div class="box-header">
              <h2 class="box-title text-light-blue">Asignaturas</h2>
              <a href="#" data-toggle="modal" data-target="#modal_Materia" class="btn btn-warning btn-sm pull-right" id="m2">Agregar asignatura</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body panel box box-primary">
              <table id="asignaturas" class="table table-bordered table-striped">
                     <thead>  <!--Header de la tabla -->  
                       <tr > 
                         <th>Nombre Asignatura</th>
                         <th></th>
                       </tr>
                    </thead>
                        <tbody> <!--Cuerpo de la tabla -->
                        {{ csrf_field() }}
                         <?php  $no=1; ?> <!--Paginacion-->
                            @foreach ($asignaturas as $asignatura)  <!--ciclo que recorre el arreglo retonrnado del controlador-->
                                <tr id="{{$asignatura->id}}" >  <!--abre fila-->
                                    <td>{{$asignatura->Nombre}}</td>  <!--agrega dato a la columna-->
                                <td>
                                <button class="btn btn-success " onclick="editar_Materia(this);" data-id="{{$asignatura->id}}" data-Nombre="{{$asignatura->Nombre}}" ><i class=" fa fa-fw fa-pencil"></i></button>  <!--botton para editar -->
                                <button class="btn btn-info" onclick='eliminar(this);' data-id="{{$asignatura->id}}" data-Nombre="{{$asignatura->Nombre}}" ><i class="fa fa-fw fa-trash "></i></button>  <!--botton para eliminar-->                                   
                                </td>
                                </tr>
                             @endforeach
                        </tbody>
              </table>
            </div>                          
            {{$asignaturas->links()}} <!--Paginacion-->
            <div class="panel box box-primary"></div>
            <!-- /.box-body -->
          </div>  
@endsection



