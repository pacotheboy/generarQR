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
            ['nombre' => '1033352', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/1033352/Rotomartillo-SDS-Plus-800W-D25133K/1033352'],
            ['nombre' => '1041789', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/1041789/Lijadora-Orbital-1-4%22-180W-Electrica/1041789'],
            ['nombre' => '1094335', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/1094335/Martillo-Demoledor-Hexagonal-2100W-D25980/1094335'],
            ['nombre' => '114219', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/114219/Esmeril-Recto-1-4%22-500W-Electrico/114219'],
            ['nombre' => '1215396', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/1215396/Pistola-de-Calor-1500W-HG1500/1215396'],
            ['nombre' => '1458450', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/1458450/Sierra-Circular-7-1-4-1200W-electrica/1458450'],
            ['nombre' => '1499254', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/1499254/Lijadora-Orbital-1-4%22-200W-Electrica/1499254'],
            ['nombre' => '170835X', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/170835X/Sierra-Circular-9-1-4-2000W-electrica/170835X'],
            ['nombre' => '1708368', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/1708368/Sierra-Circular-7-1-4-1800W-electrica/1708368'],
            ['nombre' => '1835602', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/1835602/Esmeril-Angular-4-1-2%22-800W-DWE4020/1835602'],
            ['nombre' => '1992562', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/1992562/Martillo-Demoledor-Hexagonal-1510W-HM1317CB/1992562'],
            ['nombre' => '2012782', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2012782/Taladro-Percutor-1-2%22-20V-Brushless-Inalambrico/2012782'],
            ['nombre' => '2034638', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2034638/Esmeril-Angular-9%22-2200W-Electrico/2034638'],
            ['nombre' => '2034646', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2034646/Esmeril-Angular-4-1-2%22-750W-DWE4010/2034646'],
            ['nombre' => '2141566', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2141566/Esmeril-Angular-7%22-2400W-Esmeril-Angular-4-1-2%22-750W/2141566'],
            ['nombre' => '2191911', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2191911/Esmeril-Angular-5%22-1050W-Electrico-5-discos/2191911'],
            ['nombre' => '2753308', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2191970/Lijadora-Orbital-1-3%22-190W-Electrica/2191970'],
            ['nombre' => '2213192', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2213192/Esmeril-Angular-7%22-2700W-Electrico/2213192'],
            ['nombre' => '2218089', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2218089/Pulidora-Angular-7%22-1300W-STGP1318K/2218089'],
            ['nombre' => '2249219', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2249219/Taladro-Atornillador-1-2%22-18V-Inalambrico/2249219'],
            ['nombre' => '2256193', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2256193/Taladro-Atornillador-3-8%22-12V-Inalambrico/2256193'],
            ['nombre' => '2267020', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2267020/Taladro-Percutor-1-2%22-700W-Electrico-27-accesorios/2267020'],
            ['nombre' => '2292165', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2292165/Martillo-Demoledor-SDS-Max-1500W-D25899K/2292165'],
            ['nombre' => '2360195', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2360195/Martillo-Demoledor-HM1213C-1500W/2360195'],
            ['nombre' => '2424126', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2424126/Taladro-Percutor-1-2%22-600W-Electrico-9-accesorios/2424126'],
            ['nombre' => '2444356', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2444356/Esmeril-Angular-7%22-2200W-STGL2218/2444356'],
            ['nombre' => '2456052', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2456052/Rotomartillo-SDS-Plus-750W-5-Accesorios/2456052'],
            ['nombre' => '2539365', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2539365/Taladro-Percutor-1-2%22-20V-Brushless-Inalambrico-Atornillador-de-Impacto-1-4%22-20V-Brushless-Inalambrico/2539365'],
            ['nombre' => '2578565', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2578565/Atornillador-de-Impacto-1-4%22-20V-Brushless-Inalambrico/2578565'],
            ['nombre' => '2584344', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2584344/Esmeril-Angular-4-1-2%22-830W-5-Discos/2584344'],
            ['nombre' => '261135X', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/261135X/Taladro-Percutor-1-2%22-18V-Inalambrico/261135X'],
            ['nombre' => '2611368', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2611368/Atornillador-de-Impacto-1-4%22-18V-Inalambrico/2611368'],
            ['nombre' => '2719037', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2719037/Martillo-Demoledor-SDS-Max-1010W-SHM5K/2719037'],
            ['nombre' => '2719045', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2719045/Taladro-Atornillador-3-8%22-12V-Inalambrico/2719045'],
            ['nombre' => '2719053', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2719053/Taladro-Percutor-1-2%22-20V-Inalambrico/2719053'],
            ['nombre' => '272815X', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/272815X/Taladro-Atornillador-3-8%22-8V-Inalambrico/272815X'],
            ['nombre' => '2728176', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2728176/Atornillador-de-Impacto-1-4%22-20V-Brushless-Inalambrico/2728176'],
            ['nombre' => '2728184', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2728184/Taladro-Percutor-1-2%22-20V-Brushless-Inalambrico/2728184'],
            ['nombre' => '2753286', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2753286/Taladro-Percutor-1-2%22-18V-Inalambrico/2753286'],
            ['nombre' => '2753324', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2753324/Taladro-de-Rotacion-1-2%22-750W-Electrico/2753324'],
            ['nombre' => '2948621', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/2948621/Esmeril-Angular-4-1-2-670W-GWS-670/2948621'],
            ['nombre' => '3341038', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3341038/Atornillador-de-Impacto-1-4%22-18V-Inalambrico/3341038'],
            ['nombre' => '3433927', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3433927/Fresadora-Ruteadora-550W/3433927'],
            ['nombre' => '3434052', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3434052/Martillo-Demoledor-HM0871C-1100W/3434052'],
            ['nombre' => '3437558', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3437558/Martillo-Perforador-GBH-180-LI/3437558'],
            ['nombre' => '3437604', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3437604/Kit-2-Baterias-18V-30Ah-GBA-18V-Cargador-18V-GAL-1880-CV/3437604'],
            ['nombre' => '3437620', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3437620/Esmeril-Angular-4-1-2%22-18V-Inalambrico-Sin-Bateria/3437620'],
            ['nombre' => '355659X', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/355659X/Atornillador-1-4%22-4V-Inalambrico-29-accesorios/355659X'],
            ['nombre' => '3743004', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3743004/Cepillo-para-Madera-700W-Electrico/3743004'],
            ['nombre' => '3957292', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3957292/Sierra-Caladora-GST-12V/3957292'],
            ['nombre' => '3957306', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3957306/Cargador-12V-2A/3957306'],
            ['nombre' => '3957314', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3957314/Bateria-de-Litio-GBA-12V-2AH/3957314'],
            ['nombre' => '3957322', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3957322/Llave-Impacto-Inalambrica-200NM-GDX-18V/3957322'],
            ['nombre' => '3957373', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/3957373/Taladro-Percutor-1-2%22-18V-Brushless-Inalambrico-Sin-Bateria/3957373'],
            ['nombre' => '449709', 'link' => 'https://www.sodimac.com.pe/sodimac-pe/product/449709/Pistola-de-Calor-1800W/449709'],

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
