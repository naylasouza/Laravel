@extends('products.layout')

@section('content')
    <h2>Adicionar Novo Produto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Houve alguns problemas com sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome do Produto</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea class="form-control" style="height:100px" name="description" >{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Preço</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantidade</label>
            <input type="number" name="quantity" class="form-control" value="{{ old('quantity', 0) }}">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-secondary" href="{{ route('products.index') }}">Voltar</a>
    </form>
@endsection
