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
            </div>
        </div>
    </div>
</div>
@endsection
