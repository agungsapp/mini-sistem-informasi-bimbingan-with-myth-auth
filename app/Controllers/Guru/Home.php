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
            'mapel' => $this->mapelModel->getMapelByIdGuru(user_id()),
        ];

        // dd($data['mapel']);

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
                'id_user' => user_id(),
            ]);


            return redirect()->to('/guru/home');
        } catch (\Throwable $th) {
            // throw $th;
            session()->setFlashdata('error', 'Terjadi kesalahan pada server !');
        }
    }

    public function edit($id)
    {
        $db = \Config\Database::connect();

        $getMapel = $db->table('mapel')
            ->select('mapel.*')
            ->where('id_mapel', $id)
            ->get()->getRowObject();

        $getGuru = $db->table('users')
            ->select('users.*')
            ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('auth_groups.id', 2)
            ->get();

        $guru = $getGuru->getResult();
        // dd($getMapel);

        $data = [
            'nav' => 1,
            'mapel' => $getMapel,
            'guru' => $guru
        ];


        return view('guru/home_edit', $data);
    }


    public function update()
    {
        $id = $this->request->getVar('id');

        try {
            //code...

            $this->mapelModel->update($id, [
                'judul' => $this->request->getVar('judul'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'hari' => $this->request->getVar('hari'),
                'jam' => $this->request->getVar('jam'),
                // 'id_user' => $this->request->getVar('guru'),
            ]);

            session()->setFlashdata('success', 'Update data mata pelajaran berhasil !');
            return redirect()->to('/guru/home');
        } catch (\Throwable $th) {
            // throw $th;
            session()->setFlashdata('error', 'Terjadi kesalahan pada server !');
        }
    }

    public function delete($id)
    {
        $delete = $this->mapelModel->delete($id);

        if ($delete) {
            session()->setFlashdata('success', 'Delete data mata pelajaran berhasil !');
            return redirect()->to('/guru/home');
        } else {
            session()->setFlashdata('error', 'Delete data mata pelajaran gagal !');
            return redirect()->to('/guru/home');
        }
    }
}
