@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Novo POST</div>
                <div class="panel-body">

                    {!! Form::open(['url' => 'painel/posts/salvar']) !!}

                    {!! Form::label('Titulo') !!}
                    {!! Form::input('text', 'title', '', ['class' => 'form-control', 'placeholder' => 'Titulo']) !!}<br>

                    {!! Form::label('Subtitulo') !!}
                    {!! Form::input('text', 'subtitulo', '', ['class' => 'form-control', 'placeholder' => 'Subtitulo']) !!}<br>

                    {!! Form::label('Texto') !!}
                    {!! Form::input('text', 'texto', '', ['class' => 'form-control', 'placeholder' => 'Texto']) !!}<br>

                    {!! Form::label('Resumo') !!}
                    {!! Form::input('text', 'resumo', '', ['class' => 'form-control', 'placeholder' => 'Resumo...']) !!}<br>

                    {!! Form::label('Imagem destaque') !!}
                    {!! Form::file('image') !!}<br>

                    {!! Form::label('Legenda') !!}
                    {!! Form::input('text', 'legenda', '', ['class' => 'form-control', 'placeholder' => 'Legenda']) !!}<br>


                    {!! Form::submit('Cadastrar', ['class' => 'btn btn-success']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
