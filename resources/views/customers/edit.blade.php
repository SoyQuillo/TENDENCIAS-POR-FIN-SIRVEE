@extends('layouts.app')

@section('title','Editar Cliente')

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
                        <form method="POST" action="{{ route('customers.update', $customer->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre <strong style="color:red;">(*)</strong></label>
                                            <input type="text" class="form-control" name="name" placeholder="Por ejemplo, Juan" autocomplete="off" value="{{ $customer->name }}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Correo Electrónico <strong style="color:red;">(*)</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="Por ejemplo, juan@example.com" autocomplete="off" value="{{ $customer->email }}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Dirección <strong style="color:red;">(*)</strong></label>
                                            <input type="text" class="form-control" name="address" placeholder="Por ejemplo, Av. Principal #123" autocomplete="off" value="{{ $customer->address }}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Teléfono <strong style="color:red;">(*)</strong></label>
                                            <input type="text" class="form-control" name="phone" placeholder="Por ejemplo, 123456789" autocomplete="off" value="{{ $customer->phone }}">
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
                                        <a href="{{ route('customers.index') }}" class="btn btn-danger btn-block btn-flat">Atrás</a>
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
