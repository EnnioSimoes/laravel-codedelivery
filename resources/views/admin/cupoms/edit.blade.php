@extends('app')

@section('content')
    <div class="container">
        <h3>Editar categoria</h3>

        @include('errors._check')
        <br />
        {!! Form::model($category, ['route'=>['admin.categories.update', $category->id]]) !!}
            @include('admin.categories._form')
            <div class="form-group">
                {!! Form::submit('Gravar', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>



@endsection