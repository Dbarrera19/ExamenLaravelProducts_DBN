# ExamenLaravel_DBN - Sistema de Gestión de Productos

## 📋 Descripción
Aplicación Laravel para gestionar productos con operaciones CRUD completas (Crear, Leer, Actualizar, Eliminar).

## ✨ Características

### Funcionalidades CRUD
- **Crear**: Agregar nuevos productos con validación
- **Leer**: Listar todos los productos y ver detalles individuales
- **Actualizar**: Editar información de productos existentes
- **Eliminar**: Remover productos de la base de datos

### Validaciones Implementadas
- ✅ Nombre obligatorio (string, máximo 255 caracteres)
- ✅ Precio positivo (numérico, mínimo 0.01)
- ✅ Stock entero (número entero, mínimo 0)

### Seguridad
- ✅ Protección CSRF: Token `@csrf` en todos los formularios
- ✅ Protección SQL Injection: Uso de Eloquent ORM con prepared statements
- ✅ Validación de entrada en servidor
- ✅ Métodos HTTP apropiados (GET, POST, PUT, DELETE)

### Mensajes Flash
- Confirmación de crear producto
- Confirmación de actualizar producto
- Confirmación de eliminar producto
- Validaciones mostradas en cada operación

## 🚀 Instalación y Uso

### Requisitos
- PHP 8.0 o superior
- Composer
- SQLite (ya incluido) o MySQL

### Pasos para ejecutar

1. **Abrir la carpeta del proyecto**
```bash
cd "c:\Users\CampusFP\Desktop\Daniel_Barrera\Laravel\ExamenLaravel_DBN"
```

2. **Instalar dependencias** (ya realizado)
```bash
composer install
```

3. **Ejecutar migraciones** (ya realizado)
```bash
php artisan migrate
```

4. **Iniciar el servidor**
```bash
php artisan serve
```

5. **Acceder a la aplicación**
- Abrir el navegador en: `http://127.0.0.1:8000/products`

## 📁 Estructura del Proyecto

```
ExamenLaravel_DBN/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ProductController.php    (Controlador CRUD)
│   └── Models/
│       └── Product.php                  (Modelo de Producto)
├── database/
│   └── migrations/
│       └── 2026_02_02_114823_create_products_table.php
├── resources/views/products/
│   ├── index_DBN.blade.php              (Vista de listado con iniciales DBN)
│   ├── create.blade.php                 (Crear producto)
│   ├── show.blade.php                   (Ver detalles)
│   └── edit.blade.php                   (Editar producto)
└── routes/
    └── web.php                          (Rutas del proyecto)
```

## 🔒 Detalles de Seguridad

### CSRF Protection
Todos los formularios incluyen el token CSRF requerido por Laravel:
```blade
@csrf
```

### SQL Injection Prevention
Se utiliza Eloquent ORM que proporciona:
- Prepared statements automáticos
- Binding seguro de parámetros
- Validación de entrada

### Validación
```php
$validated = $request->validate([
    'nombre' => 'required|string|max:255',
    'precio' => 'required|numeric|min:0.01',
    'stock' => 'required|integer|min:0'
]);
```

## 📊 Tabla de Productos

| Campo | Tipo | Requisitos |
|-------|------|-----------|
| id | Integer (PK) | Auto-incremento |
| nombre | String | Obligatorio, máx. 255 caracteres |
| precio | Decimal(10,2) | Obligatorio, positivo |
| stock | Integer | Obligatorio, no negativo |
| created_at | Timestamp | Automático |
| updated_at | Timestamp | Automático |

## 💻 Tecnologías Utilizadas

- **Laravel 12.49.0** - Framework PHP
- **Blade** - Motor de plantillas
- **Eloquent ORM** - Mapeo objeto-relacional
- **SQLite** - Base de datos
- **Bootstrap** - Estilos CSS (custom)

## 📝 Cumplimiento de Requisitos

✅ Nombre del proyecto: **ExamenLaravel_DBN**
✅ Migración: `create_products_table.php`
✅ Controlador: `ProductController.php`
✅ Tabla en BD: `products`
✅ Vista con iniciales: `index_DBN.blade.php`
✅ Servidor: `php artisan serve`
✅ CRUD Completo: Create, Read, Update, Delete
✅ Validaciones: nombre, precio, stock
✅ Mensajes Flash: Confirmaciones en sesión
✅ Seguridad CSRF: Tokens en formularios
✅ SQL Injection Prevention: Eloquent ORM

## 📖 Uso de la Aplicación

### Crear Producto
1. Haz clic en "+ Crear Nuevo Producto"
2. Ingresa los datos: nombre, precio y stock
3. Haz clic en "Guardar Producto"
4. Se mostrará un mensaje de éxito

### Ver Detalles
1. En el listado, haz clic en el botón "Ver"
2. Se mostrarán todos los detalles del producto

### Editar Producto
1. En el listado, haz clic en "Editar"
2. Modifica los datos
3. Haz clic en "Guardar Cambios"

### Eliminar Producto
1. En el listado, haz clic en "Eliminar"
2. Confirma la eliminación
3. El producto se eliminará de la base de datos

## 👤 Autor
Daniel Barrera Núñez (DBN)

## 📅 Fecha
2 de febrero de 2026

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
