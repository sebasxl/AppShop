@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Imagenes del producto Seleccionado</h1>

    </div>
    <div class="row justify-content-center">
        <p>
            <form enctype="multipart/form-data" method="post" action="">
            @csrf
                <div class="form-group">
                
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo" required>
                </div>
        
                <button type="submit" class="btn btn-primary">Subir nueva Imagen</button>
                <a href="{{ url('/admin/products/') }}" class="btn btn-info">Volver al Listado</a>
            </form>
        </p>
    </div>
        <div class="row">
        @foreach ($images as $image)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                <img src="{{ $image->url }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    @if($image->featured)
                        <button type="button"  class="btn btn-sm btn-outline-success" rel="tooltip" title="Imagen destacada"><i class="fa fa-star" aria-hidden="true"></i></button>
                    @else
                        <a href="{{ url('/admin/products/'.$product->id.'/images/select/'.$image->id) }}"  class="btn btn-sm btn-outline-primary"><i class="fa fa-star" aria-hidden="true"></i></a>
                    @endif
                        <form action="" method="post">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input type="hidden" name="image_id" value="{{ $image->id }}">
                        <button type="submit" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                        
                    </div>
                </div>
            </div>
        @endforeach

        </div>


    </div>
</div>
@endsection