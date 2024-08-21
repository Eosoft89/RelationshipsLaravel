<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>{{ $user->name }}</h1>
    
    {{-- Ahora puedo acceder a los datos del teléfono a través de la relación del usuario --}}
    <h3> Número: ({{ $user->phone->prefix }}) {{ $user->phone->phone_number }}</h3>

    {{-- Obtenido desde relación polimórfica, la tabla image puede ser utilizada tanto por 'User' como por 'Post' --}}
    <h2>{{ $user->image->url }}</h2>

    <h2>Mascotas: </h2>
    <ul>
    @foreach ($user->pets as $pet)  {{-- Ahora puedo llamar toda la colección de mascotas del usuario --}}
        
            <li>{{ $pet->name}}, raza: {{ $pet->type }}</li>
    @endforeach
    </ul>

    <h3>Visitas al veterinario:</h3>
    <ul>
    @foreach ($user->veterinaryVisit as $visit)
    <li>{{ $visit->veterinary_name }}, {{ $visit->veterinary_center }}, {{ $visit->visit_date }}.</li>    
    @endforeach
    </ul>

    <h2>Roles: </h2>
    <ul>
        @foreach ($user->roles as $role)
            <li>{{ $role->name }} Asignado por: {{$role->pivot->added_by}} </li> {{-- Para acceder al pivote obtenido desde la tabla de relación, es necesario utilizar pivot --}}
        @endforeach
    </ul>

    <h2>SIM info:</h2>
    <h3>Serial: {{ $user->phoneSim->serial_number }}, Compañía: {{ $user->phoneSim->company_name }}</h3> {{-- Relación "a través de". En este caso se llama a la info mediante el nombre de la función que define la relación --}}
    
</body>
</html>