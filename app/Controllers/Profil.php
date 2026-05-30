<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Profil extends BaseController{
    public function index(){
        $model = new MahasiswaModel();
        $data['profil'] = $model->getProfil();
        return view('profil', $data);
    }
}
