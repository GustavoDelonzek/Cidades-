<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cidade['nome'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: #f5f5f5;
        }
        h1 {
            font-family: 'Arial', sans-serif;
            font-size: 3rem;
            font-weight: bold;
            background: linear-gradient(90deg, #007bff, #00d4ff);
            -webkit-background-clip: text;
            color: transparent;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        .city-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .lead {
            font-size: 1.25rem;
        }
        .btn {
            padding: 10px 20px;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">{{ $cidade['nome'] }}</h1>
        
        <div class="text-center mb-4">
            <img src="https://via.placeholder.com/150" alt="Imagem de {{ $cidade['nome'] }}" class="city-image">
        </div>

        <p class="lead text-center">População: {{ number_format($cidade['populacao']) }} habitantes</p>
        <p class="lead text-center">Área: {{ number_format($cidade['area'], 2) }} km²</p>
        
        <div class="text-center mt-4">
            <a href="/paises/{{ $cidade['paisId'] }}" class="btn btn-primary mt-2">Voltar para País</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
