@extends('layouts.app')

@section('title','Editar Producto')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        </div>
    </section>
    @include('layouts.partial.msg')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-secondary">
                            <h3>@yield('title')</h3>
                        </div>
                        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre <strong style="color:red;">(*)</strong></label>
                                            <input type="text" class="form-control" name="name" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $product->name }}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Imagen <strong style="color:red;">(*)</strong></label>
                                            @if ($product->image)
                                                <center><p><img class="img-responsive img-thumbnail" src="{{ asset('uploads/products/'.$product->image) }}" style="height: 70px; width: 70px;" alt=""></p></center>
                                            @endif
                                            <input type="file" class="form-control" name="image" autocomplete="off">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Descripción <strong style="color:red;">(*)</strong></label>
                                            <input type="text" class="form-control" name="description" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $product->description }}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Cantidad <strong style="color:red;">(*)</strong></label>
                                            <input type="number" class="form-control" name="quantity" autocomplete="off" value="{{ $product->quantity }}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Precio <strong style="color:red;">(*)</strong></label>
                                            <input type="number" class="form-control" name="price" autocomplete="off" value="{{ $product->price }}">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="registerby" value="{{ Auth::user()->id }}">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-2 col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                                    </div>
                                    <div class="col-lg-2 col-xs-4">
                                        <a href="{{ route('products.index') }}" class="btn btn-danger btn-block btn-flat">Atras</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
