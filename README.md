<div align="center">

# Hotel Miranda · Laravel

**La web pública del hotel Miranda migrada a Laravel: páginas Blade, buscador de habitaciones por disponibilidad, reservas y actividades.**

Proyecto del bootcamp Full Stack de OXYGEN Academy · Sprint 11 (Laravel)

![Laravel](https://img.shields.io/badge/Laravel_12-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP_8.2-777BB4?style=flat-square&logo=php&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-F05340?style=flat-square&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=flat-square&logo=tailwindcss&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=flat-square&logo=vite&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)
![GitHub Actions](https://img.shields.io/badge/GitHub_Actions-2088FF?style=flat-square&logo=githubactions&logoColor=white)
![AWS EC2](https://img.shields.io/badge/AWS_EC2-FF9900?style=flat-square&logo=amazonec2&logoColor=white)

</div>

---

## Qué es

En sprints anteriores la web del hotel Miranda se maquetó en HTML y SASS. Aquí se lleva a **Laravel**: cada página pasa a ser una vista **Blade** servida por un controlador, los datos salen de una base de datos con **Eloquent** y se añaden formularios reales (búsqueda de habitaciones, contacto, reservas y un CRUD de actividades). La autenticación se apoya en **Laravel Breeze**.

## Funcionalidades

- **Páginas públicas** en Blade: Home, About Us, Rooms, Room Details, Offers y Contact, con layout común y navegación.
- **Buscador de habitaciones** (`/rooms`): filtra por texto en nombre o descripción y, si se indican fechas de entrada y salida, excluye las habitaciones con reservas que se solapan (`whereDoesntHave` sobre la relación `bookings`).
- **Formulario de contacto**: recibe nombre, email, teléfono, asunto y mensaje, lo registra en el log y vuelve con un mensaje de confirmación.
- **Reservas**: formulario para crear una reserva eligiendo habitación, huésped y fechas (el listado de reservas es todavía una página de marcador de posición).
- **CRUD completo de actividades** (surf, windsurf, kayak, quad, globo): listado, alta, detalle, edición y borrado, con validación de tipo, usuario, fecha, pagado y satisfacción (0-10).
- **Usuarios** con Breeze: registro, login, recuperación de contraseña, verificación de email, perfil y dashboard protegido.
- **Despliegue continuo** a una instancia **EC2** con GitHub Actions en cada push a `master`.

## Modelo de datos

| Modelo | Tabla | Campos principales | Relaciones |
| --- | --- | --- | --- |
| `User` | `users` | nombre, email, contraseña | — |
| `Room` | `rooms` | name, type, number, amenities, price, discount, offerPrice, status, description, cancellation | `hasMany` Booking |
| `Booking` | `bookings` | guest, orderDate, checkInDate, checkOutDate, roomId, status, specialRequest | `belongsTo` Room · id UUID |
| `Activity` | `activities` | type (enum), user_id, datetime, paid, notes, satisfaction | `belongsTo` User |
| `Contact` | `contacts` | date, customer, email, phone, subject, comment, archived | — |

Cada modelo tiene su **migración** y su **factory**; `DatabaseSeeder` crea un usuario de prueba y llama a `RoomSeeder`, `BookingSeeder` y `ContactSeeder`.

## Rutas y controladores

| Ruta | Controlador | Descripción |
| --- | --- | --- |
| `GET /` · `/about-us` · `/offers` | `PageController` | Páginas estáticas en Blade |
| `GET /rooms` | `PageController@rooms` | Listado y búsqueda por texto y disponibilidad |
| `GET /rooms/details/{id}` | `PageController@roomsDetails` | Detalle de habitación (maqueta estática) |
| `GET` / `POST /contact-us` | `PageController` | Página y envío del formulario de contacto |
| `resource /activities` | `ActivityController` | CRUD completo de actividades |
| `resource /bookings` | `BookingController` | Creación de reservas (`create` / `store`) |
| `/dashboard`, `/profile` | Breeze + `ProfileController` | Zona privada (requiere login) |
| `/login`, `/register`, ... | `Auth/*` | Autenticación de Breeze (`routes/auth.php`) |

## Stack

- **Backend:** PHP 8.2, Laravel 12, Eloquent ORM, Laravel Breeze
- **Frontend:** Blade, CSS de la maqueta original, Tailwind CSS y Alpine.js (vistas de Breeze), Vite
- **Base de datos:** SQLite por defecto (`.env.example`) o MySQL con Laravel Sail (`docker-compose.yml`)
- **Tests:** PHPUnit (incluye `ActivityControllerTest` con los 7 casos del CRUD)
- **Despliegue:** GitHub Actions → EC2 por SSH (`git pull`, `composer install`, `migrate`, reinicio de Apache)

## Estructura

```
app/
├── Http/Controllers/   PageController, ActivityController, BookingController, Auth/...
└── Models/             User, Room, Booking, Activity, Contact
database/
├── migrations/         users, activities, bookings, rooms, contacts
├── factories/          una por modelo
└── seeders/            DatabaseSeeder, RoomSeeder, BookingSeeder, ContactSeeder
resources/views/
├── pages/              index, aboutUs, rooms, roomsDetails, offers, contact
├── activities/         index, create, show, edit
├── bookings/           index, create
└── layouts/, auth/, profile/, components/
routes/web.php          rutas públicas, recursos y zona privada
.github/workflows/      deploy-laravel.yml
```

## Puesta en marcha

Requisitos: PHP 8.2+, Composer y Node.js 18+.

```bash
git clone https://github.com/albertocalerocastillo/OXYGEN_Laravel.git
cd OXYGEN_Laravel
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run dev          # en una terminal
php artisan serve    # en otra: http://localhost:8000
```

Variables relevantes en `.env`: `APP_KEY`, `APP_URL`, `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` y las `MAIL_*`.

Con Docker (Laravel Sail): `./vendor/bin/sail up -d` y después `./vendor/bin/sail artisan migrate --seed`.

Tests: `php artisan test`.

El workflow de despliegue usa los secretos de GitHub `SSH_HOST`, `SSH_USER` y `SSH_PRIVATE_KEY`.

## Qué aprendí

- Pasar de HTML estático a vistas **Blade** con layouts, componentes y helpers como `route()` y `asset()`.
- Diseñar la base de datos con **migraciones**, **factories** y **seeders**, y relacionar modelos con Eloquent (`hasMany`, `belongsTo`).
- Construir un CRUD con `Route::resource` y validar formularios en el controlador.
- Escribir consultas con condiciones sobre relaciones (`whereDoesntHave`) para calcular disponibilidad.
- Automatizar el despliegue a un servidor EC2 con **GitHub Actions**.

---

<div align="center">

Hecho por **Alberto Calero** · [github.com/albertocalerocastillo](https://github.com/albertocalerocastillo)

</div>
