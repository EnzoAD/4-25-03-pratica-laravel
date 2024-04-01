<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista Veículos</h1>
    <a href="/veiculos">Lista</a>
    <a href="veiculos/novo">Novo</a>
    <hr>
    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>FABRICANTE</th>
                <th>MODELO</th>
                <th>CAVALOS</th>
                <th>PORTAS</th>
                <th>MARCHAS</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista as $v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->fabricante }}</td>
                    <td>{{ $v->modelo }}</td>
                    <td>{{ $v->cavalos }}</td>
                    <td>{{ $v->portas }}</td>
                    <td>{{ $v->marchas }}</td>
                    <td>
                        <form action="/veiculos/edit" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$v->id}}">
                            <button>Editar</button>
                        </form>
                    </td>
                    <td>
                        <form action="/veiculos/delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$v->id}}">
                            <button>Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>