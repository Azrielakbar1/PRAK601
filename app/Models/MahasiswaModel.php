<?php

namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model{
    public function getProfil(){
        return [
            'nama' => 'Muhammad Azriel Akbar',
            'nim' => '2410817110011',
            'prodi' => 'Teknologi Informasi',
            'hobi' => 'Tidak melakukan apa-apa',
            'skill' => 'Indra Penciuman Tajam'
        ];
    }
}
