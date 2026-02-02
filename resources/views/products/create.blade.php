<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
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
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }
        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0,123,255,0.3);
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
        .form-actions {
            margin-top: 30px;
            display: flex;
            gap: 10px;
        }
        .error-list {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .error-list ul {
            margin: 0;
            padding-left: 20px;
        }
        .error-list li {
            margin: 5px 0;
        }
        .required {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear Nuevo Producto</h1>

        @if($errors->any())
            <div class="error-list">
                <strong>Por favor corrige los siguientes errores:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre del Producto <span class="required">*</span></label>
                <input 
                    type="text" 
                    id="nombre" 
                    name="nombre" 
                    value="{{ old('nombre') }}"
                    placeholder="Ingrese el nombre del producto"
                    required
                >
                @error('nombre')
                    <div style="color: #dc3545; font-size: 13px; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="precio">Precio (€) <span class="required">*</span></label>
                <input 
                    type="number" 
                    id="precio" 
                    name="precio" 
                    value="{{ old('precio') }}"
                    step="0.01"
                    min="0.01"
                    placeholder="0.00"
                    required
                >
                @error('precio')
                    <div style="color: #dc3545; font-size: 13px; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="stock">Stock (cantidad) <span class="required">*</span></label>
                <input 
                    type="number" 
                    id="stock" 
                    name="stock" 
                    value="{{ old('stock') }}"
                    min="0"
                    placeholder="0"
                    required
                >
                @error('stock')
                    <div style="color: #dc3545; font-size: 13px; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Guardar Producto</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
