<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
</head>

<body>

    <div class="wrapper">
        <div class="gauge">
            <div class="slice-colors">
                <div class="st slice-item"></div>
                <div class="st slice-item"></div>
                <div class="st slice-item"></div>
                <div class="st slice-item"></div>
                <div class="st slice-item"></div>
            </div>
            <div class="needle"></div>
            <div class="gauge-center"></div>
        </div>
    </div>

    <!-- <script>
        const gaugeNeedle = document.querySelector('.gauge-needle');
        const gaugeProgress = document.querySelector('.gauge-progress');
        const gaugeText = document.querySelector('.gauge-text');

        function updateGauge(percent) {
            gaugeNeedle.style.left = `${percent}%`;
            gaugeProgress.style.width = `${percent}%`;
            if (percent < 50) {
                gaugeProgress.style.background = 'red';
            } else if (percent < 80) {
                gaugeProgress.style.background = 'yellow';
            } else {
                gaugeProgress.style.background = 'green';
            }
            gaugeText.textContent = `${percent}%`;
        }
    </script> -->

</body>

</html>
