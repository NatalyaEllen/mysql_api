<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>

    @vite('resources/css/app.css')

</head>
<body>

    <div class="container">

        <h1>Lista de Produtos</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
            </tr>

            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td class="price">
                    R$ {{ $product->price }}
                </td>
            </tr>
            @endforeach

        </table>

    </div>

</body>
</html>