@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Permissões: {{$role->name}}</h3>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Titulo</th>
      <th>Descrição</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>

  @forelse($permissions as $permission)
    <tr>
      <th scope="row">{{$permission->id}}</th>
      <td>{{$permission->name}}</td>
      <td>{{$permission->label}}</td>
      <td><a class="btn btn-primary" href="{{url("/painel/permissions/$permission->id/permissions/editar")}}">Editar</a></td>
    </tr>
    @empty
    <tr>
    	<td colspan="90"><p>Nenhum resultado</p></td>
    </tr>
    @endforelse
  </tbody>
</table>

</div>
@endsection
