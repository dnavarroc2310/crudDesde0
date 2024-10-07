<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Información del Equipo</h2>

            <div class="mb-3">
                <label for="NameTeamsInput" class="form-label">Nombre del equipo</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ isset($teams->nombre) ? $teams->nombre : old('nombre') }}" placeholder="Ejemplo: Real Madrid">
            </div>


            <div class="mb-3">
                <label for="yearFundationInput" class="form-label">Año de fundación</label>
                <input type="text" class="form-control" name="Fundacion" value="{{ isset($teams->Fundacion) ? $teams->Fundacion : old('Fundacion') }}" id="Fundacion" placeholder="Ejemplo: 1902">
            </div>

            <div class="mb-3">
                <label for="cityInput" class="form-label">Ciudad local del equipo</label>
                <input type="text" class="form-control" name="City" id="city" value="{{ isset($teams->City) ? $teams->City : old('City') }}" placeholder="Ejemplo: Madrid">
            </div>

            <div class="mb-3">
                <label for="countryTeamInput" class="form-label">País del equipo</label>
                <input type="text" class="form-control" name="pais" id="pais" value="{{ isset($teams->pais) ? $teams->pais : old('pais') }}" placeholder="Ejemplo: España">
            </div>

            <div class="mb-3">
                <label for="stadiumTeamInput" class="form-label">Estadio del equipo</label>
                <input type="text" class="form-control" name="estadio" id="estadio" value="{{ isset($teams->estadio) ? $teams->estadio : old('estadio') }}" placeholder="Ejemplo: Santiago Bernabéu">
            </div>

            <div class="mb-3">
                <label for="ligTeamInput" class="form-label">Ligas ganadas</label>
                <input type="text" class="form-control" name="ligasGanadas" id="ligasGanadas" value="{{ isset($teams->ligasGanadas) ? $teams->ligasGanadas : old('ligasGanadas') }}" placeholder="Ejemplo: 35">
            </div>

            <div class="mb-3">
                <label for="copTeamInput" class="form-label">Copas ganadas</label>
                <input type="text" class="form-control" name="copasGanadasLocales" id="copasGanadasLocales" value="{{ isset($teams->copasGanadasLocales) ? $teams->copasGanadasLocales : old('copasGanadasLocales') }}" placeholder="Ejemplo: 19">
            </div>

            <div class="mb-3">
                <label for="championsTeamInput" class="form-label">Champions ganadas</label>
                <input type="text" class="form-control" name="championsGanadas" id="championsGanadas" value="{{ isset($teams->championsGanadas) ? $teams->championsGanadas : old('championsGanadas') }}" placeholder="Ejemplo: 14">
            </div>

            <input type="submit" class="btn btn-primary btn-block" value="Guardar">
        </div>
    </div>
</div>

</body>
</html>
