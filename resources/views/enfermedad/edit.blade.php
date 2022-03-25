@extends('layouts.panel')

@section('title','Actualizar Enfermedad')

@section('subtitle','Enfermedad')

@section('content')

<div class="header bg-gradient-primary pb-6 pt-3 pt-md-6">
     
    </div>
    
    <div class="container-fluid mt--7">
      
      <div class="row mt-5">
        <div class="col-xl-12 mb-12 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Editar Enfermedad</h3>
                   
                </div>
              </div>
            </div>
             <div class="panel-body formregistros" style="margin: 20px;">
            	
            <form action="{{ url('/enfermedad/'.$enfermedad->id) }}" method="post">
                
                @csrf
                @method('PUT')
                <div class="row">                            
                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Fecha diagnostico:</label>
                            <input type="date" class="form-control" name="fecha_diagnostico" required="" value="{{ old('fecha_diagnostico',$enfermedad->fecha_diagnostico) }}">
                            @if ($errors->has('fecha_diagnostico'))
                                    <span class="text-danger">{{ $errors->first('fecha_diagnostico') }}</span>
                                @endif
                            
                          </div>

                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"  required value="{{ old('nombre',$enfermedad->nombre) }}" />
                              @if ($errors->has('nombre'))
                                      <span class="text-danger">{{ $errors->first('nombre') }}</span>
                                  @endif
                          </div>

                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Observacion:</label>
                            <textarea class="form-control" name="descripcion">{{ old('descripcion',$enfermedad->descripcion) }}</textarea>
                            @if ($errors->has('descripcion'))
                                    <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                                @endif                             
                          </div>

                          </div>

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="btn  btn-primary" type="submit"><i class="fa fa-save"></i> Guardar </button>

                        <a class="btn btn-danger" href="{{ url('enfermedad') }}" > Cancelar </a>
                        
                      </div>
              </form>
             				


            </div>
            

          </div>
        </div>


      </div>

      <!-- Footer -->
      @include('includes.footer')
    </div>


@endsection


