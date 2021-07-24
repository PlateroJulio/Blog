@extends('adminlte::page')

@section('title', 'Admin Blog')

@section('content_header')
    <a class="btn btn-primary btn-block btn-sm" href="{{ route('admin.posts.create') }}">Agregar post</a>
    <h1>Listado de posts</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop