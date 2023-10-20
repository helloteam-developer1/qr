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
        ->generate('https://documentos-kia.web.app/ForteHB.pdf', '../public/qrcodes/ForteHBqrcode.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)
        ->style('square')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.web.app/ForteSeda.pdf', '../public/qrcodes/ForteSedaqrcode.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)
        ->style('round')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.web.app/Niro.pdf', '../public/qrcodes/Niroqrcode.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)->margin(2)
        ->style('dot')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.web.app/Seltos.pdf', '../public/qrcodes/Seltosqrcode.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)
        ->style('dot')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.web.app/Sorento.pdf', '../public/qrcodes/Sorentoqrcode.png' );
        QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)->margin(2)
        ->style('round')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.web.app/Soul.pdf', '../public/qrcodes/Soulqrcode.png' );
       QrCode::eye('circle')->margin(2)->eyeColor(0, 109, 2, 2,0, 0, 0)
        ->eyeColor(1, 109, 2, 2,0, 0, 0)
        ->eyeColor(2, 109, 2, 2,0, 0, 0)->margin(2)
        ->style('round')
        ->format('png')
        ->size(2000)
        ->merge(public_path('img/600KIA.png'), .1,true)
        ->generate('https://documentos-kia.web.app/Sportage.pdf', '../public/qrcodes/Sportageqrcode.png' );
        



    }
}
