@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detalle Estudiante</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nombre Estudiante : </strong>
          {{$biodata->nombreEstudiante}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Direccion Estudiante : </strong>
          {{$biodata->direccEstudiante}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Regresar</a>
      </div>
  </div>
</div>
@endsection
