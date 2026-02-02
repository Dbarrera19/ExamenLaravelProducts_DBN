<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
        }
        .product-detail {
            margin: 30px 0;
        }
        .detail-row {
            padding: 15px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
            border-left: 4px solid #007bff;
            border-radius: 4px;
        }
        .detail-label {
            font-weight: bold;
            color: #555;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .detail-value {
            font-size: 20px;
            color: #333;
            margin-top: 5px;
        }
        .btn {
            padding: 12px 20px;
            margin-right: 10px;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-success {
            background-color: #28a745;
            color: white;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #545b62;
        }
        .form-actions {
            margin-top: 30px;
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalles del Producto</h1>

        <div class="product-detail">
            <div class="detail-row">
                <div class="detail-label">ID</div>
                <div class="detail-value">#{{ $product->id }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-label">Nombre</div>
                <div class="detail-value">{{ $product->nombre }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-label">Precio</div>
                <div class="detail-value">€{{ number_format($product->precio, 2) }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-label">Stock</div>
                <div class="detail-value">{{ $product->stock }} unidades</div>
            </div>

            <div class="detail-row">
                <div class="detail-label">Creado</div>
                <div class="detail-value">{{ $product->created_at->format('d/m/Y H:i:s') }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-label">Última actualización</div>
                <div class="detail-value">{{ $product->updated_at->format('d/m/Y H:i:s') }}</div>
            </div>
        </div>

        <div class="form-actions">
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Editar</a>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Volver al listado</a>
        </div>
    </div>
</body>
</html>
