@extends('app')

@section('content')
    <div class="container">
        <h3>Criar categoria</h3>

        @include('errors._check')
        <br />
        {!! Form::open(['route'=>'admin.categories.store']) !!}
            @include('admin.categories._form')
            <div class="form-group">
                {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>



@endsection