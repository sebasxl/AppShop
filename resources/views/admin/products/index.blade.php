@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1>Listado de productos</h1>


        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Categoría</th>
                <th scope="col">precio</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td scope="col">{{ $product->id }}</td>
                    <td scope="col">{{ $product->name }}</td>
                    <td scope="col">{{ $product->description }}</td>
                    <td scope="col">{{ $product->category ? $product->category->name : 'General' }}</td>
                    <td scope="col">{{ $product->price }}</td>
                    <td>
                    
                        <form action="{{ url('/admin/products/'.$product->id) }}" method="post">
                        @csrf
                        <a href="#" class="btn btn-sm btn-outline-info"><i class="fas fa-info-circle"></i></a>
                        <a href="{{ url('/admin/products/'.$product->id.'/edit') }}" class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></a>
                        {{ method_field('DELETE')}}
                            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>

            {{ $products->links() }}
    </div>
</div>
@endsection