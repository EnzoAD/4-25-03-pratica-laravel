<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Veículos</h1>
    <a href="/veiculos">Lista</a>
    <a href="veiculos/novo">Novo</a>
    <hr>
    <form action="{{ isset($veiculo) ? '/veiculos/update' : '/veiculos/novo' }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $veiculo->id ?? '' }}">
        
        <label for="fabricante">Fabricante</label>
        <input type="text" name="fabricante" id="fabricante" value="{{ $veiculo->fabricante ?? '' }}"><br>

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo" value="{{ $veiculo->modelo ?? '' }}"><br>

        <label for="cavalos">Cavalos</label>
        <input type="number" name="cavalos" id="cavalos" value="{{ $veiculo->cavalos ?? '' }}"><br>
  
        <label for="portas">Portas</label>
        <input type="number" name="portas" id="portas" value="{{ $veiculo->portas ?? '' }}"><br>
        
        <label for="marchas">Marchas</label>
        <input type="number" name="marchas" id="marchas" value="{{ $veiculo->marchas ?? '' }}"><br>

        <br>
        <button>Salvar</button>

    </form>
</body>
</html>