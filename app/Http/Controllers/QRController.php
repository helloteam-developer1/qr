<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QRController extends Controller
{
    public function qr_code(){

        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)
        ->style('round')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.firebaseapp.com/EV6_2024.pdf', '../public/qrcodes/EV6_2024.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)
        ->style('square')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.firebaseapp.com/FORTE.pdf', '../public/qrcodes/FORTE.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)
        ->style('round')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.firebaseapp.com/Niro_2023.pdf', '../public/qrcodes/NIRO_2023.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)
        ->style('round')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.firebaseapp.com/Seltos_2024.pdf', '../public/qrcodes/SELTOS_2024.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)
        ->style('round')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.firebaseapp.com/Kia_K3.pdf', '../public/qrcodes/KIA_K3.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)->margin(2)
        ->style('dot')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.firebaseapp.com/SORENTO_Septiembre_2023.pdf', '../public/qrcodes/SORENTO_2023.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)
        ->style('dot')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.firebaseapp.com/SPORTAGE_2023.pdf', '../public/qrcodes/SPORTAGE_2023.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)->margin(2)
        ->style('round')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.firebaseapp.com/Soul_2023.pdf', '../public/qrcodes/Soulqrcode.png' );




    }
}
