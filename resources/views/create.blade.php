<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Estilos CSS dentro de la etiqueta <style> -->
    <style>
       body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
}

.gauge {
    position: relative;
    width: 80%; /* Adjust width for responsiveness */
    height: auto; /* Allow height to adjust */
    max-width: 300px; /* Set a maximum width */
    overflow: hidden;
}

.gauge:before {
    content: '';
    position: absolute;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: conic-gradient(
        #4caf50 0% 70%,
        #ddd 70% 100%
    );
    transform: translateY(-50%) rotate(180deg);
    top: 100%;
    left: 50%;
    transform-origin: bottom;
}

.gauge .indicator {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 10px;
    height: 90px;
    background-color: #333;
    transform-origin: bottom;
    transform: rotate(180deg);
}

.gauge .label {
    position: absolute;
    width: 100%;
    text-align: center;
    top: 40%;
    font-size: 24px;
    font-weight: bold;
    color: #333;
}
    </style>
</head>
<body>

    <!-- Barra de progreso -->
    <div class="gauge">
        <div class="indicator" style="transform: rotate(126deg);"></div>
        <div class="label">70%</div>
    </div>

</body>
</html>
