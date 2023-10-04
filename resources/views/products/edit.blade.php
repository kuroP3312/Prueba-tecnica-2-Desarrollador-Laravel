@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default"  style="margin-top: 50px;">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('index') }}"> Atras</a>
                            </div>
                            <div>
                                <span class="card-title">Editar Producto</span>
                            </div>
                            <div class="float-right"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('product.update', $product->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            <div class="form-group">
                                <input type="number" id="id" name="id" class="form-control" value="{{$product->id}}" hidden >
                            </div>
                            @include('products.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
