@extends('adminlte::page')

@section('title', 'Admin Blog')

@section('content_header')
    <h1>Crear nuevo post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.posts.store', 'autocomplete' => 'off']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre', ['class' => 'form-control']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre del post']) !!}
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
                    {!! Form::label('category_id', 'Categoría', ['class' => 'form-control']) !!}
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                    @error('category_id')
                        <small class="text-danger"> {{$message}} </small>
                    @enderror
                </div>
                <div class="form-group">
                    <p class="font-weight-bold form-control">Etiquetas</p>
                    @foreach ($tags as $tag)
                        <label class="mr-4">
                            {!! Form::checkbox('tags[]', $tag->id, null) !!}
                            {{ $tag->name}}
                        </label>
                    @endforeach
                    
                </div>
                <div class="form-group">
                    <p class="font-weight-bold form-control">Estado</p>
                    <label class="mr-4">
                        {!! Form::radio('status', 1, true) !!}
                        Borrador
                    </label>
                    <label>
                        {!! Form::radio('status', 2) !!}
                        Publicado
                    </label>
                </div>
                <div class="form-group">
                    {!! Form::label('extract', 'Extract', ['class' => 'form-control']) !!}
                    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
                    @error('extract')
                        <small class="text-danger"> {{$message}} </small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Cuerpo del post', ['class' => 'form-control']) !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    @error('body')
                        <small class="text-danger"> {{$message}} </small>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::submit('Crear posts', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
            .create( document.querySelector( '#extract' ))
            .catch( error => {
                console.error( error );
            }
        );

        ClassicEditor
            .create( document.querySelector( '#body' ))
            .catch( error => {
                console.error( error );
            }
        );

    </script>
@endsection