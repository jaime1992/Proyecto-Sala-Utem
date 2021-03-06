@extends('Layout.administrador')

@section('content')

        <!-- Page Content -->
        <div id="page-wrapper" style="min-height: 586px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Crear Periodo</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                   @if(Session::has('message'))

        
          <div class="alert alert-dismissible alert-info">
           <strong>{{ Session::get('message') }}</strong>
          </div>

      @endif


                 
                    @if ($errors->any())
                    <div class="alert alert-success" role="alert">
                 
                    <ul>
                         @foreach($errors->all() as $error)
                         <li>{{ $error }} </li>
                          @endforeach
                      </ul>
                      @endif
                  </div>
                       <div style="float: right;width: 450px;">
                         <div class="highlight" data-example-id="condensed-table" 
                         style="  width: 500px;background-color: rgb(225, 232, 236);">

                   {!! Form::open(['route' => 'Administrador.subirPeriodos.index',
     'method' =>'POST','enctype' =>'multipart/form-data']) !!}
       <div class="form-group">
            <div class="panel-body">
          
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
              <label class="col-md-4 control-label">Seleccione el archivo: </label>
                    <input type="file" style="width:80%" class="form-control" name="file" >
                    {!!Form::button('Enviar',['class' => 'btn btn-primary','type' => 'submit','style' => 'margin-top:20px;float:right;margin-top:-30px;margin-left:20px'])!!}
                 </div>
               </div>
             </div>
          </div>      

            {!! Form::close() !!} 
          </div>
          <div class="highlight" data-example-id="condensed-table" style="width:650px">


                 {!! Form::open(['route' => 'Administrador.periodos.store', 'method' => 'POST']) !!}
                    <form role="form">
                      
                        <div class="form-group" style="width:900px">
                           {!! Form::label('bloque', 'Bloque') !!}
                            {!! Form::text('bloque', '',['class' => 'form-control',
                             'placeholder' => 'Ingrese un nuevo bloque']) !!}
                        </div>
                         <div class="form-group" style="width:900px">
                         {!! Form::label('inicio', 'Inicio') !!}
                            {!! Form::text('inicio', '',['class' => 'form-control',
                             'placeholder' => 'Ingrese el inicio']) !!}
                        </div>
                        <div class="form-group" style="width:900px">
                         {!! Form::label('fin', 'Fin') !!}
                            {!! Form::text('fin', '',['class' => 'form-control',
                             'placeholder' => 'Ingrese el fin']) !!}
                        </div>
                  
                         <button type="submit" class="btn btn-success">Crear</button>
                         <a class="btn btn-danger" href="{{url('Administrador/periodos')}}" role="button">Cancelar</a>

                    </form>
                      {!! Form::close() !!}

                      
                    </div>

   
            </div>  
        </div>       <!-- /#page-wrapper -->


@stop


         