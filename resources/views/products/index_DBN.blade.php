<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .btn {
            padding: 10px 15px;
            margin: 5px;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            display: inline-block;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #545b62;
        }
        .btn-success {
            background-color: #28a745;
            color: white;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .btn-info {
            background-color: #17a2b8;
            color: white;
        }
        .btn-info:hover {
            background-color: #138496;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f0f0f0;
        }
        .actions {
            text-align: center;
        }
        .no-products {
            text-align: center;
            padding: 30px;
            color: #666;
        }
        .header-actions {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        form {
            display: inline;
        }
        .form-inline {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestión de Productos - DBN</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="header-actions">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Crear Nuevo Producto</a>
            <span style="color: #666; font-size: 14px;">Total de productos: {{ count($products) }}</span>
        </div>

        @if(count($products) > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio ($)</th>
                        <th>Stock</th>
                        <th>Fecha de Creación</th>
                        <th class="actions">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>#{{ $product->id }}</td>
                            <td>{{ $product->nombre }}</td>
                            <td>€{{ number_format($product->precio, 2) }}</td>
                            <td><strong>{{ $product->stock }}</strong> unidades</td>
                            <td>{{ $product->created_at->format('d/m/Y H:i') }}</td>
                            <td class="actions">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Editar</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="form-inline" onsubmit="return confirm('¿Estás seguro de eliminar este producto?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="no-products">
                <p style="font-size: 18px; margin: 20px 0;">No hay productos registrados.</p>
            </div>
        @endif
    </div>
</body>
</html>
