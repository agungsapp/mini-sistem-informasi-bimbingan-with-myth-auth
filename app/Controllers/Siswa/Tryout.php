<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\BankSoalModel;
use App\Models\MapelModel;

class Tryout extends BaseController
{

    protected $mapelModel, $soalModel;

    public function __construct()
    {
        $this->mapelModel = new MapelModel();
        $this->soalModel = new BankSoalModel();
    }

    public function index()
    {
        //

        $data = [
            'nav' => 4,
            'mapel' => $this->mapelModel->getMapelSoal(),
        ];

        // dd($data['mapel']);

        return view('siswa/tryout', $data);
    }

    public function show($id)
    {
        $data = [
            'nav' => 4,
            'soal' => $this->soalModel->where('id_mapel', $id)->findAll()
        ];

        // dd($data['soal']);

        return view('siswa/tryout_soal', $data);
    }
}
