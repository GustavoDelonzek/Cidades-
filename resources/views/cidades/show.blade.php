<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cidade['nome'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">{{ $cidade['nome'] }}</h1>
        <p class="lead">População: {{ number_format($cidade['populacao']) }} habitantes</p>
        <p class="lead">Área: {{ number_format($cidade['area'], 2) }} km²</p>
        
        <div class="text-center mt-4">
            <a href="/paises/{{ $cidade['paisId'] }}/estados/{{ $cidade['estado'] }}/cidades" class="btn btn-secondary">Voltar para Cidades</a>
            <br>
            <a href="/paises/{{ $cidade['paisId'] }}" class="btn btn-primary mt-2">Voltar para País</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
