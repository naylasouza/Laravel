@extends('products.layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Lista de Produtos</h2>
        <a class="btn btn-success" href="{{ route('products.create') }}">Adicionar Produto</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if ($products->isEmpty())
        <div class="alert alert-info">
            Nenhum produto encontrado.
        </div>
    @else
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th width="200px">Ações</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description ?? 'N/A' }}</td>
                    <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
