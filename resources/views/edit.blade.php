@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Editar datos estudiante</h3>
      </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
      <strong>Oops! </strong> Parece que hay problemas con sus datos de entrada.<br>
      <ul>
        @foreach ($errors as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route('biodata.update', $biodata->id)}}"
  method="post">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-12">
        <strong>Nombre Estudiante: </strong>
        <input type="text" name"nombreEstudiante" class="form-control" value="
        {{$biodata->nombreEstudiante}}">
      </div>
      <div class="col-md-12">
        <strong>Dirección Estudiante: </strong>
        <textarea class="form-control" name"direccEstudiante" rows="8" cols="80">
        {{$biodata->direccEstudiante}}</textarea>
      </div>

      <div class="col-md-12">
        <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Regresar</a>
        <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
      </div>
    </div>
  </form>
</div>
@endsection
