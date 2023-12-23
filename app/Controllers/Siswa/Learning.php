<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\Progres;

class Learning extends BaseController
{

    protected $progresModel;

    public function __construct()
    {
        $this->progresModel = new Progres();
    }

    public function index()
    {
        //
        $data = [
            'nav' => 3,
            'data' => $this->progresModel->getDataKomentarBySiswa(user_id())
        ];

        return view('siswa/learning', $data);
    }
}
