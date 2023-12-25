<?php

namespace App\Controllers\Parent;

use App\Controllers\BaseController;
use App\Models\OrangTuaModel;
use App\Models\Progres;

class Learning extends BaseController
{
    protected $progresModel, $ortuModel;

    public function __construct()
    {
        $this->progresModel = new Progres();
        $this->ortuModel = new OrangTuaModel();
    }

    public function index()
    {
        //

        $getSiswa = $this->ortuModel->where('id_ortu', user_id())->findAll(1);
        $id_siswa = $getSiswa[0]->id_siswa;

        $data = [
            'nav' => 3,
            'data' => $this->progresModel->getDataKomentarBySiswa($id_siswa),
        ];

        // dd($data['data']);

        return view('parent/learning', $data);
    }
}
