<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\MapelModel;

class Home extends BaseController
{

    protected $mapelModel;

    public function __construct()
    {
        $this->mapelModel = new MapelModel();
    }

    public function index()
    {
        //
        $data = [
            'nav' => 1,
        ];

        // dd(logged_in());

        return view('guru/home', $data);
    }

    public function simpanKelas()
    {
        try {
            //code...

            $this->mapelModel->save([
                'judul' => $this->request->getVar('judul'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'hari' => $this->request->getVar('hari'),
                'jam' => $this->request->getVar('jam'),
                'id_user' => $this->request->getVar('guru'),
            ]);


            return redirect()->to('/admin/registration');
        } catch (\Throwable $th) {
            // throw $th;
            session()->setFlashdata('error', 'Terjadi kesalahan pada server !');
        }
    }
}
