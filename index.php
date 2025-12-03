<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Status</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
            color: #333;
        }
        .container {
            text-align: center;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-top: 5px solid #28a745; /* Green line indicates success */
        }
        h1 { margin-top: 0; color: #28a745; }
        .info {
            background: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
            font-family: monospace;
        }
        .timestamp { font-size: 0.8rem; color: #666; margin-top: 20px; }
    </style>
</head>
<body>

<div class="container">
    <h1>✅ System Operational!</h1>
    <p>Your web server is successfully parsing PHP files.</p>

    <div class="info">
        PHP Version: <strong><?php echo phpversion(); ?></strong>
    </div>

    <div class="timestamp">
        Server Time: <?php echo date("Y-m-d H:i:s"); ?>
    </div>
</div>

</body>
</html>