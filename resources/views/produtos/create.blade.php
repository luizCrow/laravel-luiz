<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
</head>
<body>
    <h1>Criar Produto</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" required><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
