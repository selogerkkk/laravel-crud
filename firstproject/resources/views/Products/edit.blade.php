@extends('layouts.app')
@section('content')
    <div class="mt-5">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="float-start">
                    <h2>Editar produto</h2>
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Lista de produtos</a>
                </div>
            </div>
        </div>
        @include('helpers.error')
        <div class="col-lg-12">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Nome:</strong>
                            <input type="text" class="form-control" placeholder="Input name..." name="name"
                                value="{{ old('name', $product->name) }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Quantidade:</strong>
                            <input type="Number" class="form-control" placeholder="Quantidade" name="qtd"
                                value="{{ old('qtd', $product->qtd) }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-primary float-end">Enviar</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
