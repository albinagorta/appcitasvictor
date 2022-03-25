@extends('layouts.panel')

@section('title','Enfermedad')

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
                  <h3 class="mb-0 btnagregar">Endermedad  <a href="{{ url('enfermedad/create')}}" class="btn btn-sm btn-success"><i class="fas fa-plus-circle " ></i> Agregar</a></h3>
                   
                </div>
              </div>
            </div>

            @if(Session::has('notification'))
                        <div class="alert alert-success">
                            {{ Session::get('notification') }}
                            @php
                                Session::forget('notification');
                            @endphp
                        </div>
            @endif
            <br>

            <div class="table-responsive listaregistros">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                  <th scope="col">Id</th>
                    <th scope="col">Paciente</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Fecha Diagnostico</th>
                    <th scope="col">Enfermedad</th>
                    <th scope="col">Fecha Registro</th>
                    <th scope="col">Observacion</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($enfermedad as $enf)
               <tr>
                    <th scope="row">
                      {{ $enf->id }}
                    </th>
                    
                    <td>
                     {{ $enf->patient->name }}
                    </td>

                    <td>
                     {{ $enf->patient->cedula }}
                    </td>

                    <td>
                     {{ $enf->fecha_diagnostico }}
                    </td>

                     <td>
                      {{ $enf->nombre }}
                    </td>

                    <td>
                      {{ $enf->created_at }}
                    </td>
                    <td>
                      {{ $enf->descripcion }}
                    </td>
                    
                    <td>                   
                        <form action="{{ url('/enfermedad/'.$enf->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <a href="{{ url('/enfermedad/'.$enf->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
                          <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                     
                    </td>
                  </tr> 
                  @endforeach              
                </tbody>
              </table>

              
              <!-- PAGINACION -->
              {{ $enfermedad->links() }}


            </div>
            

          </div>
        </div>


      </div>

      <!-- Footer -->
      @include('includes.footer')
    </div>


@endsection


