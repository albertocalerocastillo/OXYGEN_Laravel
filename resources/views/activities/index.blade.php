<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividades</title>
</head>
<body>
    <h1>Lista de Actividades</h1>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <ul>
        @forelse ($activities as $activity)
            <li>
                {{ $activity->type }} - {{ $activity->datetime }}
                <a href="{{ route('activities.show', $activity->id) }}">Ver</a>
                <a href="{{ route('activities.edit', $activity->id) }}">Editar</a>
                <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar esta actividad?')">Eliminar</button>
                </form>
            </li>
        @empty
            <li>No hay actividades registradas.</li>
        @endforelse
    </ul>

    <p><a href="{{ route('activities.create') }}">Crear nueva actividad</a></p>
</body>
</html>