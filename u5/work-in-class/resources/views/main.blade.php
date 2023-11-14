<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body>
    @if($alumnos instanceof \Illuminate\Support\Collection)
        {{-- It's a collection --}}
        @foreach ($alumnos as $alumno)
            <li>{{ $alumno->nombre }} - {{ $alumno->edad }} years old - {{ $alumno->curso }}</li>
        @endforeach
    @else
        {{-- It's a single model --}}
        <li>{{ $alumnos->nombre }} - {{ $alumnos->edad }} years old - {{ $alumnos->curso }}</li>
    @endif

</body>
</html>