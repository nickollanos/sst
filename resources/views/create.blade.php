<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Estilos CSS dentro de la etiqueta <style> -->
    <style>
    .gauge {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 0 100% 100% 0;
  background-color: #f0f0f0;
  overflow: hidden;
}

.gauge-value {
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  border-radius: 0 100% 100% 0;
  background-color: #4CAF50;
  transform: scaleX(0.5);
  transform-origin: left;
  transition: transform 0.5s ease-in-out;
}

.gauge-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 24px;
  font-weight: bold;
}
    </style>
</head>
<body>

    <!-- Barra de progreso -->
    <div class="gauge-container">
        <div class="gauge">
            <div class="gauge-value"></div>
        </div>
        <div class="gauge-text">50%</div>
    </div>

    <script>
        const gaugeValue = document.getElementById('gauge-value');
const gaugeText = document.getElementById('gauge-text');

// Actualiza el valor del gauge
function updateGauge(value) {
  gaugeValue.style.transform = `scaleX(${value / 100})`;
  gaugeText.textContent = `${value}%`;
}

// Ejemplo de uso
// updateGauge(75);
    </script>
</body>
</html>
