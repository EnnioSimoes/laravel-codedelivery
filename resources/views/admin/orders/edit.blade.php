@extends('app')

@section('content')
    <div class="container">
        <h3>Editar Pedido # {{ $order->id }} - {{ $order->total }}</h3>
        <h3>Cliente: {{ $order->client->user->name }}</h3>
        <h4>Data: {{ $order->created_at }}</h4>
        <p>
            <b>Entregar em:</b><br>
            {{ $order->client->address }} - {{ $order->client->city }} - {{ $order->client->state }}
        </p>
        @include('errors._check')
        <br>
        {!! Form::model($order, ['route'=>['admin.orders.update', $order->id]]) !!}

        <div class="form-group">
            {!! Form::label('Status', 'Status:') !!}
            {!! Form::select('status', $list_status, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Entregador', 'Entregador:') !!}
            {!! Form::select('user_deliveryman_id', $deliveryman, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Gravar', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>



@endsection