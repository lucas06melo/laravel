@extends('layouts.admin')

@section('content')
<div class="container">
    
    @forelse($posts as $post)
    @can('view_post', $post)
    <h1>{{$post->title}}</h1>
    <p>{{$post->description}}</p><br>
    <b>Autor: {{$post->user->name}}</b>
    @endcan
    <hr>

    @empty
    <p>Nenhuma Noticia</p>

    @endforelse
</div>
@endsection
