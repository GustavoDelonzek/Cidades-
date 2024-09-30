<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
    background-color: #f5f5f5;
    padding: 10px;
    }

</style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Cidades</h1>
        <ul class="list-group">
            @foreach($cidades as $cidade)
                <li class="list-group-item">
                    <a href="/cidades/{{ $cidade['id'] }}" class="text-decoration-none">{{ $cidade['nome'] }}</a>
                </li>
            @endforeach
        </ul>
        <div class="text-center mt-4">
            <a href="/paises" class="btn btn-primary">Voltar</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
