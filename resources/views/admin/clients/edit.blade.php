@extends('app')

@section('content')
    <div class="container">
        <h3>Editar cliente: </h3>

        @include('errors._check')
        <br />
        {!! Form::model($client, ['route'=>['admin.clients.update', $client->id]]) !!}
            @include('admin.clients._form')
            <div class="form-group">
                {!! Form::submit('Gravar', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>



@endsection