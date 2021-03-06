@extends('layouts.admin')
@section('contenido')


<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<h3>Editar ciudad: {{$ciudad->nombre}}</h3>
@if(count($errors)>0)
<div class="alert alert-danger">

<ul>
  @foreach($errors->all() as $error)
   <li>
   	{{$error}}
   </li>
   @endforeach
</ul>

</div>
@endif
</div>
</div>


{!!Form::model($ciudad,['method'=>'PATCH','route'=>['ciudad.update',$ciudad->idciudad],'files'=>'true'])!!}
{{Form::token()}}

<div class="row">
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

<div class="form-group">
   <label form="nombre">Nombre</label>
   <input type="text" name="nombre" class="form-control" required value="{{$articulo->nombre}}" >
  
</div>
</div>


<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

<div class="form-group">
<button class="btn btn-primary" type="submit">Guardar</button>
<button class="btn btn-danger" type="reset">Cancelar</button>
</div>
</div>
</div>


{!!Form::close()!!}



@endsection