<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MapelModel;
use Myth\Auth\Entities\User;

class Registration extends BaseController
{
    protected $userModel, $mapelModel;

    public function __construct()
    {
        $this->userModel = new User();
        $this->mapelModel = new MapelModel();
    }

    public function index()
    {

        $db = \Config\Database::connect();

        $getGuru = $db->table('users')
            ->select('users.*')
            ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('auth_groups.id', 2)
            ->get();

        $guru = $getGuru->getResult();

        // dd($guru);

        $data = [
            'guru' => $guru,
            'mapel' => $this->mapelModel->getMapelWithGuru(),
        ];

        // dd($data['mapel']);

        return view('admin/registration', $data);
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
            'mapel' => $getMapel,
            'guru' => $guru
        ];


        return view('admin/registration_edit', $data);
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
                'id_user' => $this->request->getVar('guru'),
            ]);

            session()->setFlashdata('success', 'Update data mata pelajaran berhasil !');
            return redirect()->to('/admin/registration');
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
            return redirect()->to('/admin/registration');
        } else {
            session()->setFlashdata('error', 'Delete data mata pelajaran gagal !');
            return redirect()->to('/admin/registration');
        }
    }
}
