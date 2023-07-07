@extends('layouts.app')
@section('content')
    <div class="mt-5">
        <div class="col-lg-12">
            <div class="float-start">
                <h2>Lista de produtos</h2>
            </div>
            <div class="float-end">
                <a href="{{ route('products.create') }}" class="btn btn-primary">Adicionar produto</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Qtd</th>
                    <th>Options</th>
                </tr>
            <tbody>
                @forelse($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->Qtd }}</td>
                        <td>
                            <a href="{{ route('products.edit', $item->id) }}" class="btn btn-secondary">Editar</a>
                            <button class="btn btn-danger deleteButton" data-id="{{ $item->id }}">Delete</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">NO DATA</td>
                    </tr>
                @endforelse
            </tbody>
            </thead>
        </table>
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tem certeza?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Ao clicar em "deletar", o dado será apagado. Essa ação é irreversível.
                    </div>
                    <form action="" id="delete_form" method="POST" class="remove_item">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" id="itemId">
                        <div class="modal-footer">
                            <button class="btn btn-danger" type="submit">Deletar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            $('.deleteButton').on('click', function() {
                var itemId = $(this).attr('data-id');
                $('#itemId').val(itemId)
                $('#delete_form').attr('action', `products/` + itemId);
                $('#deleteModal').modal('show');
            });
        });
    </script>
@endsection
