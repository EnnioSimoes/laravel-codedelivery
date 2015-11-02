@extends('app')

@section('content')
    <div class="container">
        <h3>Cadastrar cupom</h3>

        @include('errors._check')
        <br />
        {!! Form::open(['route'=>'admin.cupoms.store']) !!}
        @include('admin.cupoms._form')
        <div class="form-group">
            {!! Form::submit('Criar Cupom', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>



@endsection