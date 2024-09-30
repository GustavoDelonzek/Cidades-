<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Países</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    h1 {
        font-family: 'Arial', sans-serif;
        font-size: 3rem;
        font-weight: bold;
        background: linear-gradient(90deg, #1e90ff, #00bfff);
        -webkit-background-clip: text;
        color: transparent;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 5px;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    h1::after {
        content: "";
        display: block;
        width: 100px;
        height: 4px;
        background-color: #00bfff;
        margin: 10px auto 0;
    }
    body {
    background-color: #f5f5f5;
    padding: 10px;
    }

</style>

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Países</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($paises as $pais)
                <div class="col">
                    <div class="card h-100">
                    <img src="{{$pais['imagem']}}" class="card-img-top" alt="{{ $pais['nome'] }}">

                        <div class="card-body">
                            <h5 class="card-title">{{ $pais['nome'] }}</h5>
                            <a href="/paises/{{ $pais['id'] }}" class="btn btn-primary">Ver detalhes</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
