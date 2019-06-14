@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <h2 class="display-4">Productos Disponibles</h2>

    </div>
    <div class="row">
    @foreach ($products as $product)
        <div class="col-md-4 my-2">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    {{ $product->category->name }}
                </div>
                <img src="{{ $product->featured_image_url }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
        {{ $products->links() }}
    </div>
    
        
</div>
@endsection