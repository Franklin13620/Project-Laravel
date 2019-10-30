@extends ('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3>Nuevo Estudiante</h3>
    </div>
  </div>

  @if ($errors->any())
  <div class="alert alert-dangert">
    <strong>Opps!</strong>Hay problemas con sus datos<br>
    <ul>
      @foreach ($errors  as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
  </div>
  @endif

  <form action="{{route('biodata.store')}}" method="post">
    @csrf
    <div class="row">
      <strong>Nombre Estudiante: </strong>
      <input type="text" name="nombreEstudiante" class="form-control" placeholder="Nombre Estudiante">
    </div>

    <div class="col-md-12">
      <strong>Direccion Estudiante</strong>
      <textarea class="form-control" placeholder="Direccion Estudiante" name="direccEstudiante" rows="8" cols="80"></textarea>
    </div>

    <div class="col-md-12">
      <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Regresar</a>
      <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
    </div>
  </form>
</div>
@endsection
