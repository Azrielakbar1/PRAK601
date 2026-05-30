<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Beranda extends BaseController{
    public function index(){
        $model = new MahasiswaModel();
        $data['profil'] = $model->getProfil();
        return view('beranda', $data);
    }
}
