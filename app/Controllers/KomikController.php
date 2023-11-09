<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KomikController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar komik'
        ];
        return view('komik/index', $data);
    }
}