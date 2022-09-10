<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Komentar;

class ClientController extends Controller
{
    function filter()
    {
        $nama = request('judul');
        $data['judul'] = $judul;
        $data['list_artikel'] = Artikel::where('judul', 'like', "%$judul%")->get();

        return view('frontview.blog', $data);
    }

    function showIndex()
    {
        $data['list_artikel'] = Artikel::all();
        return view('frontview.index', $data);
    }

    function showBlog()
    {
        $data['list_artikel'] = Artikel::all();
        return view('frontview.blog', $data);
    }

    function showSingle(Artikel $artikel)
    {
        $data['artikel'] = $artikel;
        $data2['list_komentar'] = Komentar::all();
        return view('frontview.single', $data, $data2);
    }


}