<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\MapelModel;
use App\Models\Progres;
use Myth\Auth\Models\UserModel;

class Learning extends BaseController
{

    protected $progresModel, $userModel, $mapelModel;

    public function __construct()
    {
        $this->progresModel = new Progres;
        $this->userModel = new UserModel();
        $this->mapelModel = new MapelModel();
    }

    public function index()
    {
        //
        $data = [
            'nav' => 3,
            'data' => $this->progresModel->getDataKomentar(user_id()),
        ];

        // dd($data['data']);
        return view('guru/learning', $data);
    }


    public function add()
    {

        $db = \Config\Database::connect();

        $getSiswa = $db->table('users')
            ->select('users.*')
            ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('auth_groups.id', 4)
            ->get();

        $siswa = $getSiswa->getResult();


        // dd($siswa);

        $data = [
            'nav' => 3,
            'siswa' => $siswa,
            'mapel' => $this->mapelModel->where('id_user', user_id())->findAll()
        ];

        // dd($data['mapel']);

        return view('guru/learning_add', $data);
    }


    public function store()
    {

        try {
            $this->progresModel->save([
                'id_siswa' => $this->request->getVar('siswa'),
                'id_mapel' => $this->request->getVar('kelas'),
                'komentar' => $this->request->getVar('komentar'),
                'score' => $this->request->getVar('score'),
            ]);

            return redirect()->to('/guru/learning')->with('success', 'berhasil menambahkan komentar !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->to('/guru/learning')->with('error', 'gagal menambahkan komentar, Terjadi kesalahan pada server !');
        }
    }

    public function show($id)
    {
        // create data done delete done , sisa ini show dulu data yang mau di edit. baru sampe sini

        $db = \Config\Database::connect();

        $getSiswa = $db->table('users')
            ->select('users.*')
            ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('auth_groups.id', 4)
            ->get();

        $siswa = $getSiswa->getResult();

        $data = [
            'nav' => 3,
            'data' => $this->progresModel->find($id),
            'siswa' => $siswa,
            'mapel' => $this->mapelModel->where('id_user', user_id())->findAll()
        ];

        // dd($data['data']);

        return view('guru/learning_edit', $data);
    }

    public function update()
    {
        try {


            $id = $this->request->getVar('id');

            $this->progresModel->update($id, [
                'id_siswa' => $this->request->getVar('siswa'),
                'id_mapel' => $this->request->getVar('kelas'),
                'score' => $this->request->getVar('score'),
                'komentar' => $this->request->getVar('komentar'),
            ]);

            return redirect()->to('/guru/learning')->with('success', 'berhasil melakukan update data !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->to('/guru/learning')->with('error', 'gagal melakukan update data, Terjadi kesalahan pada server !');
        }
    }


    public function delete($id)
    {
        $this->progresModel->delete($id);
        return redirect()->back()->with('success', 'berhasil menghapus data !');
    }
}
