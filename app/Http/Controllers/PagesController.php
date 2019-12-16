<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Akloop Bloglariga hush kelibsiz!';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'Biz haqimizda';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array (
            'title' => 'Hizmatlar',
            'services' => ['Bloglar', 'Qidiruv', 'Rasimlar']
        );
        return view('pages.services')->with($data);
    }
}
