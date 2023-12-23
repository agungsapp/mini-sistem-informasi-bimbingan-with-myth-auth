<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use App\Models\BankSoalModel;
use App\Models\MapelModel;

class Home extends BaseController
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
            'nav' => 1,
            'mapel' => $this->mapelModel->getMapelSoal(),
        ];

        // dd($data['mapel']);

        return view('siswa/home', $data);
    }
}
