@extends('Layout.encargado')


@section('css_plugins')

{!!HTML::style('css/jquery.dataTables.css') !!}
@stop

@section('content3')



   <!-- Page Content -->
        <div id="page-wrapper" style="min-height: 586px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Cursos</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>

             @if(Session::has('message'))
             <p class="alert alert-success">{{ Session::get('message')}} </p>
             @endif


           <div class="panel-body">
                           <p>
                                <a class="btn btn-primary"
                                 href="{{route('Encargado.cursos.create')}}" 
                                role="button"> Ingresar Cursos</a>
                                </p>
                          
                           
                                <div id="dataTables-example_wrapper" 
                                class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                         
                                <div class="row">
                                <div class="col-sm-12">

                         <div style=" margin-top: 30px;">           
                                
                            <table id="table_id" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Asignatura</th>
                                            <th>Docente</th>
                                            <th>Semestre</th>
                                            <th>Año</th>
                                            <th>Seccion</th>
                                            <th>Accion</th>
                                        

                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($cursos as $cur)
                                          <tr>
                                            
                                            <td>{{ $cur->id}}</td>
                                            <td>{{ $cur->asignaturas->nombre}}</td>
                                            <td>{{ $cur->docentes->nombres}}</td>
                                            <td>{{ $cur->semestre}}</td>
                                            <td>{{ $cur->anio}}</td>
                                            <td>{{ $cur->seccion}}</td>
                                            
                                           <td>
                                             <a class="btn btn-info btn-sm" 
                                             href="{{ route('Encargado.cursos.edit', $cur) }}">Ajustes</a>
                                            </td>
                                            
                                        </tr>


                                     
                                        @endforeach
                                    </tbody>
                                    
                               </table>
                               
                                       
                                    
                                         

                                </div>  
                                                      
                        </div> 

            </div>      <!-- /#page-wrapper -->



 </div>

    <!-- /#wrapper -->

@stop

@section('js_bottom')

{!!HTML::script('js/jquery.dataTables.js') !!}

<script>    
$(document).ready(function() {
    $('#table_id').dataTable( {
        "language": {
            "lengthMenu": "Mostrando _MENU_ por pagina",
            "zeroRecords": "No se encontraron registros",
            "info": "Mostrando _PAGE_ de _PAGES_ paginas",
            "infoEmpty": "No se encontraron registros",
            "infoFiltered": "(Los _MAX_ datos no pertenecen a los que desea encontrar)",
             "sSearch": "Buscar:"
        }
    });

    
} );

</script>

@stop