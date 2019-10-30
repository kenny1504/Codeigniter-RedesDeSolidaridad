@extends("theme.$theme.layout")  <!--extiendo del layout "pagina inicio" -->

<!--prueba-->
<!--agrega titulo a la pagina-->
@section('titulo')  
    Parentesco
@endsection

@section('contenido')  <!--agrega codigo a la seccion contenido del layout-->
           
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
                       </tr>
                    </thead>
                        <tbody> <!--Cuerpo de la tabla -->
                        {{ csrf_field() }}
                         <?php  $no=1; ?> <!--Paginacion-->
                            @foreach ($parentescos as $parentesco)  <!--ciclo que recorre el arreglo retonrnado del controlador-->
                                <tr id="{{$parentesco->id}}" >  <!--abre fila-->
                                    <td>{{$parentesco->Parentesco}}</td>  <!--agrega dato a la columna-->
                                <td>
                                <button class="btn btn-success editarparentesco" data-id="{{$parentesco->id}}" data-Nombre="{{$parentesco->Parentesco}}" ><i class=" fa fa-fw fa-pencil"></i></button>  <!--botton para editar -->
                                <button class="btn btn-info eliminar-parentesco "data-id="{{$parentesco->id}}" data-Nombre="{{$parentesco->Parentesco}}" ><i class="fa fa-fw fa-trash "></i></button>  <!--botton para eliminar-->                                   
                                </td>
                                </tr>
                             @endforeach
                        </tbody>
              </table>
            </div>                          
            {{$parentescos->links()}} <!--Paginacion-->
            <div class="panel box box-primary"></div>
            <!-- /.box-body -->
          </div>  
@endsection