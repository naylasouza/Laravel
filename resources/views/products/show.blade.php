@extends('products.layout')

@section('content')
    <h2>Detalhes do Produto</h2>
    <a class="btn btn-secondary mb-3" href="{{ route('products.index') }}">Voltar</a>

    <div class="card">
        <div class="card-header">
            <strong>{{ $product->name }}</strong>
        </div>
        <div class="card-body">
            <p><strong>Descrição:</strong> {{ $product->description ?? 'N/A' }}</p>
            <p><strong>Preço:</strong> R$ {{ number_format($product->price, 2, ',', '.') }}</p>
            <p><strong>Quantidade:</strong> {{ $product->quantity }}</p>
            <p><strong>Criado em:</strong> {{ $product->created_at->format('d/m/Y H:i') }}</p>
            <p><strong>Atualizado em:</strong> {{ $product->updated_at->format('d/m/Y H:i') }}</p>
        </div>
    </div>
@endsection
