<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalles de la Actividad</title>
</head>
<body>
    <h1>Detalles de la Actividad</h1>

    <div>
        <strong>Tipo:</strong> {{ $activity->type }}
    </div>

    <div>
        <strong>ID de Usuario:</strong> {{ $activity->user_id }}
    </div>

    <div>
        <strong>Fecha y Hora:</strong> {{ $activity->datetime }}
    </div>

    <div>
        <strong>Pagado:</strong> {{ $activity->paid ? 'Sí' : 'No' }}
    </div>

    <div>
        <strong>Notas:</strong>
        <p>{{ $activity->notes }}</p>
    </div>

    <div>
        <strong>Satisfacción:</strong> {{ $activity->satisfaction }}
    </div>

    <p><a href="{{ route('activities.index') }}">Volver a la lista</a></p>
</body>
</html>