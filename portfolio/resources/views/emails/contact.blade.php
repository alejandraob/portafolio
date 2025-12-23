<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje de contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #1a355c;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #0550b8;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            color: #0550b8;
            margin-bottom: 8px;
            display: block;
        }
        .field-value {
            color: #1a355c;
            background-color: #fffef6;
            padding: 12px;
            border-left: 3px solid #0550b8;
            border-radius: 4px;
        }
        .field-value a {
            color: #0550b8;
            text-decoration: none;
        }
        .message-box {
            background-color: #fffef6;
            padding: 15px;
            border-radius: 4px;
            border-left: 3px solid #0550b8;
            white-space: pre-wrap;
            word-wrap: break-word;
            line-height: 1.6;
        }
        .footer {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 13px;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📧 Nuevo Mensaje de Contacto</h1>
        </div>

        <div class="content">
            <p>Has recibido un nuevo mensaje desde el formulario de contacto de tu portfolio.</p>

            <div class="field">
                <span class="field-label">Nombre:</span>
                <div class="field-value">{{ $data['name'] }}</div>
            </div>

            <div class="field">
                <span class="field-label">Email:</span>
                <div class="field-value">
                    <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
                </div>
            </div>

            <div class="field">
                <span class="field-label">Asunto:</span>
                <div class="field-value">{{ $data['subject'] }}</div>
            </div>

            <div class="field">
                <span class="field-label">Mensaje:</span>
                <div class="message-box">{{ $data['message'] }}</div>
            </div>
        </div>

        <div class="footer">
            <p>Este email fue enviado desde el formulario de contacto de tu portfolio.</p>
            <p>Puedes responder directamente a este email para contactar con {{ $data['name'] }}.</p>
        </div>
    </div>
</body>
</html>
