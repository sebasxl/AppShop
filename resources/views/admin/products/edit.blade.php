@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar producto</div>

                <div class="card-body">
                    <form action="{{ url('/admin/products') }}" method="post">
                    @csrf 
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <label for="name">Titulo de la publicación</label>
                                <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="number" step="0.01" class="form-control" name="price" value="{{ $product->price }}">
                            </div>
                        </div>
                    </div>

                        <div class="form-group">
                            <label for="description">Descripcion corta</label>
                            <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                        </div>

                        <div class="form-group">
                            <label for="longdescription">Detalle</label>
                            <textarea class="form-control" name="longdescription" rows="3">{{ $product->longdescription }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
                        <a href="{{ url('/admin/products') }}" class="btn btn-secondary mb-2">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection