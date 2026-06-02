<?php

namespace App\Controllers;

use App\Models\PortfolioModel;

class Portfolio extends BaseController
{
    public function index()
    {
        $model = new PortfolioModel();

        $data = [
            'title' => 'Beranda',
            'profile' => $model->getProfile()
        ];

        return view('beranda', $data);
    }

    public function profil()
    {
        $model = new PortfolioModel();

        $data = [
            'title' => 'Profil',
            'profile' => $model->getProfile()
        ];

        return view('profil', $data);
    }
}