<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de equipos europeos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1 style="padding-left: 35%">Equipos europeos</h1>

<button type="button" class="btn btn-primary" style="margin-left: 85%;" id="create">Crear</button><br>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Fundación</th>
                <th>City</th>
                <th>Pais</th>
                <th>Estadio</th>
                <th>Ligas ganadas</th>
                <th>Copas Ganadas Locales</th>
                <th>Champions Ganadas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            <tr>
                <td scope="row">{{$team->id}}</td>
                <td>{{$team->nombre}}</td>
                <td>{{$team->Fundacion}}</td>
                <td>{{$team->City}}</td>
                <td>{{$team->pais}}</td>
                <td>{{$team->estadio}}</td>
                <td>{{$team->ligasGanadas}}</td>
                <td>{{$team->copasGanadasLocales}}</td>
                <td>{{$team->championsGanadas}}</td>
                <td>
                    <a href="{{url('/teams/'. $team->id . '/edit')}}">Editar</a>
                    <form action="{{'/teams/'. $team->id}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Desea borrar?')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script>
    document.getElementById('create').addEventListener('click', function(){
        window.location.href = '/teams/create';
    });
</script>
</html>
