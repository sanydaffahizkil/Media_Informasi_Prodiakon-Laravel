<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Display the one-page media information view.
     */
    public function index()
    {
        $dataPath = resource_path('data/content.json');

        if (!File::exists($dataPath)) {
            abort(404, 'Data konten prodiakon tidak ditemukan.');
        }

        $content = json_decode(File::get($dataPath), true);

        return view('home', compact('content'));
    }

    /**
     * Get data prodiakon by region / wilayah code (AJAX endpoint if needed).
     */
    public function getWilayah(string $kode)
    {
        $dataPath = resource_path('data/content.json');
        if (!File::exists($dataPath)) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        $content = json_decode(File::get($dataPath), true);
        $wilayahList = $content['data_wilayah'] ?? [];

        foreach ($wilayahList as $w) {
            if ($w['kode'] === $kode) {
                return response()->json($w);
            }
        }

        return response()->json(['error' => 'Wilayah tidak ditemukan'], 404);
    }
}
