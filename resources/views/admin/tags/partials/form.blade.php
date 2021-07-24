<div class="form-group">
    {!! Form::label('name', 'Nombre', ['class' => 'form-control']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre del tag']) !!}
    @error('name')
        <small class="text-danger"> {{$message}} </small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug', ['class' => 'form-control']) !!}
    {!! Form::text('slug', null, ['class' => 'form-control disabled', 'readonly' ]) !!}
    @error('slug')
        <small class="text-danger"> {{$message}} </small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('color', 'Color', ['class' => 'form-control']) !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
    @error('color')
        <small class="text-danger"> {{$message}} </small>
    @enderror
</div>