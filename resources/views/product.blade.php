@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">{{ $product->name }}</h1>
            <p class="lead"><img src="{{ $product->featured_image_url }}" alt="" height="300" width="300" ></p>
        </div>
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">Agregar al carrito</button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Que cantidad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('/cart') }}" method="post">
                    @csrf
                    <div class="modal-body">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="number" name="quantity" value="1" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                    </form>
                </div>
            </div>
            </div>
        </div>

    </div>
    <div class="row">
    
    </div>
    
        
</div>
@endsection