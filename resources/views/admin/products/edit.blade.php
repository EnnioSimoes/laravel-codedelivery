@extends('app')

@section('content')
    <div class="container">
        <h3>Editar produto</h3>

        @include('errors._check')
        <br />
        {!! Form::model($product, ['route'=>['admin.products.update', $product->id]]) !!}
            @include('admin.products._form')
            <div class="form-group">
                {!! Form::submit('Gravar', ['class'=>'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>



@endsection