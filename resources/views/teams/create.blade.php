
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{url('/teams')}}" method="post">
    @csrf
    @include('teams.from', ['modo'=>'Crear'])
</form>

</body>
</html>
