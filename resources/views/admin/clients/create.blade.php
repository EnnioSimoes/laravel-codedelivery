@extends('app')

@section('content')
    <div class="container">
        <h3>Cadastrar usuário</h3>

        @include('errors._check')
        <br />
        {!! Form::open(['route'=>'admin.clients.store']) !!}
            @include('admin.clients._form')
            <div class="form-group">
                {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>



@endsection