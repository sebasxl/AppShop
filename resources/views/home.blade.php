@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="button" class="btn btn-danger btn-lg"><i class="fas fa-shopping-cart"></i> Carrito de Compras</button>
                    <button type="button" class="btn btn-warning btn-lg"><i class="far fa-list-alt"></i> Pedidos realizados</button>
                </div>
                
                    

                    <table class="table">
                        <thead>
                            <tr>
                            <th class="text-center">#</th>
                            <th class="col-md-2 text-center">Nombre</th>
                            <th class="text-right">precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th class="text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach(auth()->user()->cart->details as $detail)
                            <tr>
                                <td><img src="{{ $detail->product->featured_image_url}}" height="50"></td>
                                <td><a href="{{ url('/products/'.$detail->product->id) }}"></a>{{ $detail->product->name }}</td>
                                <td>$ {{ $detail->product->price }}</td>
                                <td>{{ $detail->quantity }}</td>
                                <td>$ {{ $detail->quantity * $detail->product->price }}</td>
                                <td>
                                
                                    <form action="{{ url('/admin/products/'.$detail->product->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE')}}
                                        <button type="submit" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                
            </div>
        </div>
    </div>
</div>
@endsection
