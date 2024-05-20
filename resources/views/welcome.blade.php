<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentación de la API - Aicoll</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }
        header h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 0;
        }
        .main {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
            border-radius: 8px;
        }
        .api-section {
            margin-bottom: 20px;
        }
        .api-section h2 {
            background: #77aaff;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }
        .api-section ul {
            list-style: none;
            padding: 0;
        }
        .api-section ul li {
            background: #f4f4f4;
            margin: 5px 0;
            padding: 10px;
            border: #ddd 1px solid;
            border-radius: 5px;
        }
        .api-section ul li span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="api-section">
                <h2>Empresas</h2>
                <ul>
                    <li><span>GET</span> /api/companies: Obtener todas las empresas.</li>
                    <li><span>GET</span> /api/companies/{id}: Obtener una empresa por ID.</li>
                    <li><span>GET</span> /api/companies/nit/{nit}: Obtener una empresa por NIT.</li>
                    <li><span>POST</span> /api/companies: Crear una nueva empresa.</li>
                    <li><span>PUT</span> /api/companies/{id}: Actualizar una empresa existente.</li>
                    <li><span>DELETE</span> /api/companies/{id}: Eliminar una empresa.</li>
                </ul>
            </div>
            <div class="api-section">
                <h2>Usuarios</h2>
                <ul>
                    <li><span>GET</span> /api/users: Obtener todos los usuarios.</li>
                    <li><span>GET</span> /api/users/{id}: Obtener un usuario por ID.</li>
                    <li><span>POST</span> /api/users: Crear un nuevo usuario.</li>
                    <li><span>PUT</span> /api/users/{id}: Actualizar un usuario existente.</li>
                    <li><span>DELETE</span> /api/users/{id}: Eliminar un usuario.</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
