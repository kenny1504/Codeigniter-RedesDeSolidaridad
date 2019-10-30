@extends("theme.$theme.layout")  <!--extiendo del layout "pagina inicio" -->

<!--prueba-->
<!--agrega titulo a la pagina-->
@section('titulo')  
    Oficio
@endsection

@section('contenido')  <!--agrega codigo a la seccion contenido del layout-->
           
            <div class="box">
            <div class="box-header">
              <h2 class="box-title text-light-blue">Oficios</h2>
              <a href="#" data-toggle="modal" data-target="#modal_Oficio" class="btn btn-warning btn-sm pull-right" id="m2">Agregar Oficio</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body panel box box-primary">
              <table id="oficios" class="table table-bordered table-striped">
                     <thead>  <!--Header de la tabla -->  
                       <tr > 
                         <th>Nombre</th>
                       </tr>
                    </thead>
                        <tbody> <!--Cuerpo de la tabla -->
                        {{ csrf_field() }}
                         <?php  $no=1; ?> <!--Paginacion-->
                            @foreach ($oficios as $oficio)  <!--ciclo que recorre el arreglo retonrnado del controlador-->
                                <tr id="{{$oficio->id}}" >  <!--abre fila-->
                                    <td>{{$oficio->Nombre}}</td>  <!--agrega dato a la columna-->
                                <td>
                                <button class="btn btn-success editaroficio" data-id="{{$oficio->id}}" data-Nombre="{{$oficio->Nombre}}" ><i class=" fa fa-fw fa-pencil"></i></button>  <!--botton para editar -->
                                <button class="btn btn-info eliminar-oficio "data-id="{{$oficio->id}}" data-Nombre="{{$oficio->Nombre}}" ><i class="fa fa-fw fa-trash "></i></button>  <!--botton para eliminar-->                                   
                                </td>
                                </tr>
                             @endforeach
                        </tbody>
              </table>
            </div>                          
            {{$oficios->links()}} <!--Paginacion-->
            <div class="panel box box-primary"></div>
            <!-- /.box-body -->
          </div>  
@endsection