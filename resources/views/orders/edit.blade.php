@extends('layouts.app')

@section('title','Editar order')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-secondary">
                            <h3>@yield('title')</h3>
                        </div>
                        <form method="POST" action="{{ route('orders.update',$order->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre <strong style="color:red;">(*)</strong></label>
                                            <input type="text" class="form-control" name="name" placeholder="Por ejemplo, Positiva" autocomplete="off" value="{{ $order->name }}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Descripción <strong style="color:red;">(*)</strong></label>
                                            <div class="form-group label-floating">
                                                <div style="display:flex;">
                                                    <textarea class="form-control" name="description" rows="3" placeholder="Ingrese la descripción">{{ $order->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Cantidad <strong style="color:red;">(*)</strong></label>
                                            <input type="text" class="form-control" name="quantity" placeholder="0" autocomplete="off" value="{{ $order->quantity }}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Precio <strong style="color:red;">(*)</strong></label>
                                            <input type="text" class="form-control" name="price" placeholder="Precio" autocomplete="off" value="{{ $order->price }}">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Imagen</label>
                                                    <input type="file" class="form-control-file" name="image" id="image" value="{{ $order->image }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="registerby" value="{{ Auth::user()->id }}">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-2 col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Editar</button>
                                    </div>
                                    <div class="col-lg-2 col-xs-4">
                                        <a href="{{ route('orders.index') }}" class="btn btn-danger btn-block btn-flat">Atrás</a>
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
