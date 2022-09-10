<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showIndex(){
        return view('frontview.index');
    }

    function showContact(){
        return view('frontview.contact');
    }

    function showBlog(){
        return view('frontview.blog');
    }

    function showSingle(){
        return view('frontview.single');
    }
    function showBase(){
        return view('template.base');
    }
    function showArtikel(){
        return view('admin.artikel');
    }
    function showKomentar(){
        return view('admin/komentar');
    }

    function showBeranda(){
        return view('admin/beranda');
    }

    function showPromo(){
        return view('admin/promo');
    }
}