<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QRCODE</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="container flex flex-col items-center">
        <h1 class="text-3xl font-semibold mb-7">Escanea el codigo QR</h1>
        {!! 
            QrCode::eye('circle')->eyeColor(0, 109, 2, 2,0, 0, 0)
            ->eyeColor(1, 109, 2, 2,0, 0, 0)
            ->eyeColor(2, 109, 2, 2,0, 0, 0)
            ->color(46,46,46)
            ->style('round')
            ->format('svg')
            ->size(400)
            ->merge(public_path('img/400KIA.png'), .2,true)
            ->generate('https://hellomexico.mx/');
        !!}
        
        
    </main>
</body>
</html>