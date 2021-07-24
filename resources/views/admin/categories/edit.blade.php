@extends('adminlte::page')

@section('title', 'Admin Blog')

@section('content_header')
    <h1>Editar categoría</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($category, ['route'=> ['admin.categories.update', $category], 'method' =>'put']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre', ['class' => 'form-control']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre de la categoría']) !!}
                    @error('name')
                        <small class="text-danger"> {{$message}} </small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug', ['class' => 'form-control']) !!}
                    {!! Form::text('slug', null, ['class' => 'form-control disabled', 'readonly']) !!}
                    @error('slug')
                        <small class="text-danger"> {{$message}} </small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::submit('Actualizar categoría', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection