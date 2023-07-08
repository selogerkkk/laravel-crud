@extends('layouts.app')
@section('content')
    <div class="mt-5">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="float-start">
                    <h2>Criar produto</h2>
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Lista de produtos</a>
                </div>
            </div>
        </div>
        @include('helpers.error')
        <div class="col-lg-12">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Nome:</strong>
                            <input type="text" class="form-control" placeholder="Inserir nome do item..." name="name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Quantidade:</strong>
                            <input type="Number" class="form-control" placeholder="Inserir quantidade..." name="qtd">
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
