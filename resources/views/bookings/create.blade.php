<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Reserva</title>
</head>
<body>
    <h1>Crear Nueva Reserva</h1>

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf

        <div>
            <label for="guest">Nombre del Huésped:</label>
            <input type="text" id="guest" name="guest" required>
        </div>

        <div>
            <label for="checkInDate">Fecha de Check-in:</label>
            <input type="date" id="checkInDate" name="checkInDate" required>
        </div>

        <div>
            <label for="checkOutDate">Fecha de Check-out:</label>
            <input type="date" id="checkOutDate" name="checkOutDate" required>
        </div>

        <div>
            <label for="roomId">Habitación:</label>
            <select id="roomId" name="roomId" required>
                <option value="">Seleccionar Habitación</option>
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->name }} (Número: {{ $room->number }})</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Crear Reserva</button>
        <a href="{{ route('bookings.index') }}">Volver al Listado de Reservas</a>
    </form>

</body>
</html>