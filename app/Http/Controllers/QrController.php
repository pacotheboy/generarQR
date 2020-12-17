<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        set_time_limit(10000);
        $datasExcel = [
            ['nombre' => '3872343', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/SKU/3872343/'],
            ['nombre' => '3872351', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/SKU/3872351/'],
            ['nombre' => '3872408', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/SKU/3872408/'],

        ];

        foreach($datasExcel as $dataExcel){
            $data = array(
                'nombre' => $dataExcel['nombre'],
                'link'   => $dataExcel['link']
            );

            $qr = $this->generarqr($data);
        }

        echo 'Terminamos';
    }


    #Generamos QR
    public function generarqr($data)
    {
        $url = $data['link']; // dominio/agentes
        $url = urlencode($url); // encriptado
        $url = "http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=".$url; //api google

        $guardar = file_put_contents('fotoqr/'.$data['nombre'].'.png', file_get_contents($url));

        return  $url;
    }
}














