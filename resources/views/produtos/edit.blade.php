<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="{{ $produto->nome }}" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required>{{ $produto->descricao }}</textarea><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" value="{{ $produto->preco }}" required><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
