<?php

namespace App\Controllers\Parent;

use App\Controllers\BaseController;
use App\Models\MapelModel;
use App\Models\OrangTuaModel;
use Myth\Auth\Models\UserModel;

class Home extends BaseController
{

    protected $ortuModel, $userModel, $mapelModel;

    public function __construct()
    {
        $this->ortuModel = new OrangTuaModel();
        $this->userModel = new UserModel();
        $this->mapelModel = new MapelModel();
    }

    public function index()
    {
        // check ortu has murid ? 

        // dd(user()->nama);

        $check = $this->ortuModel->where('id_ortu', user_id())->findAll();

        $data = [
            'nav' => 1,
        ];

        if (empty($check)) {

            $db = \Config\Database::connect();

            $getSiswa = $db->table('users')
                ->select('users.*')
                ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
                ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                ->where('auth_groups.id', 4)
                ->get();

            $siswa = $getSiswa->getResult();

            $data = [
                'nav' => 1,
                'data' => $siswa,
            ];
            return view('parent/siswa', $data);
        } else {

            $getSiswa = $this->ortuModel->where('id_ortu', user_id())->findAll(1);
            $id_siswa = $getSiswa[0]->id_siswa;

            // dd($id_siswa);

            $data = [
                'nav' => 1,
                'data' => $this->mapelModel->findAll(),
            ];

            // dd($data['data']);

            return view('parent/home', $data);
        }
    }


    public function save()
    {
        $id_siswa = $this->request->getVar('siswa');
        $id_ortu = user_id();

        try {
            $this->ortuModel->save(
                [
                    'id_siswa' => $id_siswa,
                    'id_ortu' => $id_ortu,
                ]
            );

            return redirect()->to('/parent/home')->with('success', 'berhasil menyimpan informasi data orang tua siswa !');
        } catch (\Throwable $th) {
            return redirect()->to('/parent/home')->with('error', 'gagal menyimpan informasi data orang tua siswa !');
            //throw $th;
        }
    }
}
