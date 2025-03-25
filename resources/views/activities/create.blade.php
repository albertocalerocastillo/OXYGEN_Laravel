<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Actividad</title>
</head>
<body>
    <h1>Crear Nueva Actividad</h1>

    @if ($errors->any())
        <div style="color: red;">
            <strong>Hubo algunos problemas:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('activities.store') }}">
        @csrf

        <div>
            <label for="type">Tipo de Actividad:</label>
            <select name="type" id="type">
                <option value="surf">Surf</option>
                <option value="windsurf">Windsurf</option>
                <option value="kayak">Kayak</option>
                <option value="atv">ATV</option>
                <option value="hot air balloon">Globo Aerostático</option>
            </select>
        </div>

        <div>
            <label for="user_id">ID de Usuario:</label>
            <input type="number" name="user_id" id="user_id">
        </div>

        <div>
            <label for="datetime">Fecha y Hora:</label>
            <input type="datetime-local" name="datetime" id="datetime">
            <small>Formato: AAAA-MM-DD HH:MM:SS</small>
        </div>

        <div>
            <label for="paid">Pagado:</label>
            <input type="checkbox" name="paid" id="paid" value="1">
        </div>

        <div>
            <label for="notes">Notas:</label>
            <textarea name="notes" id="notes"></textarea>
        </div>

        <div>
            <label for="satisfaction">Satisfacción (0-10):</label>
            <input type="number" name="satisfaction" id="satisfaction" min="0" max="10">
        </div>

        <button type="submit">Guardar Actividad</button>
        <a href="{{ route('activities.index') }}">Volver a la lista</a>
    </form>
</body>
</html>