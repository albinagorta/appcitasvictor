@extends('layouts.panel')

@section('title','Actualizar Paciente')

@section('subtitle','Paciente')

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
                  <h3 class="mb-0">Editar Paciente</h3>
                   
                </div>
              </div>
            </div>
             <div class="panel-body formregistros" style="margin: 20px;">
            	
            <form action="{{ url('/paciente/'.$paciente->id) }}" method="post">
                
                @csrf
                @method('PUT')
                <div class="row">
                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Nombre Paciente:</label>
                            <input type="text" class="form-control" id="nombre" name="name"  required value="{{ old('name',$paciente->name) }}" />
                            @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif  
                          </div>

                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Email:</label>
                            <input type="text" class="form-control" name="email" required="" value="{{ old('email',$paciente->email)  }}">
                            @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif  
                            
                          </div>

                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>cedula:</label>
                            <input type="number" class="form-control" name="cedula" value="{{ old('cedula',$paciente->cedula) }}">
                            @if ($errors->has('cedula'))
                                    <span class="text-danger">{{ $errors->first('cedula') }}</span>
                                @endif  
                             
                          </div>
                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Direccion:</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address',$paciente->address) }}">
                            @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif                               
                          </div>

                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Tel??fono / M??vil:</label>
                            <input type="number" class="form-control" name="phone" value="{{ old('phone',$paciente->phone) }}">
                            @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif                               
                          </div>
                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Contrase??a:</label>
                            <input type="password" class="form-control" name="password">
                            <p>Ingrese solo si desea cambiar la contrase??a</p>
                            @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif  

                          </div>
                          </div>

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="btn  btn-primary" type="submit"><i class="fa fa-save"></i> Guardar </button>

                        <a class="btn btn-danger" href="{{ url('paciente') }}" > Cancelar </a>
                        
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


