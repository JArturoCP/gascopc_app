<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Sheet extends Controller
{
    public function getByStore($store)
    {
        // URL del Google Sheet exportado como CSV
        $url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vSb3Rzbu15SgsKOTqNo1r-jJzHYI8AX_5Xq478NV1cHffez6ombJ44IUXM9hY_ZR0Ths0vW4KFUrTK4/pub?gid=0&single=true&output=csv";

        // Obtener el CSV remoto
        $csv = array_map('str_getcsv', file($url));

        // La primera fila son los encabezados
        $headers = array_shift($csv);

        $data = [];
        foreach ($csv as $row) {
            if (count($row) === count($headers)) {
                $data[] = array_combine($headers, $row);
            }
        }

        // Filtrar por Store
        $filtered = collect($data)->filter(function($row) use ($store) {
            return isset($row['Store']) && strtolower(trim($row['Store'])) == strtolower(trim($store));
        })->values();

        return response()->json($filtered);
    }
}
