@extends('app')

@section('content')
    <div class="container">
        <h3>Criar produto</h3>

        @include('errors._check')
        <br />
        {!! Form::open(['route'=>'admin.products.store']) !!}
            @include('admin.products._form')
            <div class="form-group">
                {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>



@endsection