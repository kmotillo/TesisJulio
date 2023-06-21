@extends('app')
@section('contenido')
<x-app-layout>
    <div class="py-12">
        @include('plantilla.smallBoxes')
                  <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                      <!-- general form elements -->
                      <div class="card card-success">
                        <div class="card-header">
                          <h3 class="card-title">Editar Persona</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('persona', $persona->id)}}" method="POST">
                            @method('put')
                          @csrf
                          <div class="card-body">
                            <div class="form-group">
                              <label>Nombre</label>
                              <input type="text"  value="{{$persona->nombre}}"  name="nombre" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                              <label>Apellido</label>
                              <input type="text" value="{{$persona->apellido}}"  name="apellido" class="form-control" placeholder="Apellido">
                            </div>
                            <div class="form-group">
                              <label>Cédula</label>
                              <input type="text" value="{{$persona->cedula}}" name="cedula" class="form-control" placeholder="Cedula">
                            </div>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-success">Editar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
    </div>
</x-app-layout>

@endsection


