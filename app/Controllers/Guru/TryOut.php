<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;
use App\Models\BankSoalModel;
use App\Models\MapelModel;

class TryOut extends BaseController
{

    protected $mapelModel, $bankSoalModel;
    protected $db;

    public function __construct()
    {
        $this->mapelModel = new MapelModel();
        $this->bankSoalModel = new BankSoalModel();
        $this->db = \Config\Database::connect();
    }


    public function index()
    {
        //
        $data = [
            'nav' => 4,
            'mapel' => $this->mapelModel->getMapelByIdGuru(user_id()),
        ];
        return view('guru/try_out', $data);
    }


    public function show($id)
    {
        $getMapel = $this->db->table('mapel')
            ->select('mapel.*')
            ->where('id_mapel', $id)
            ->get()->getRowObject();

        // dd($getMapel);

        $getSoalMapel = $this->bankSoalModel->where('id_mapel', $id)->findAll();
        // dd($getSoalMapel);

        $data = [
            'nav' => 4,
            'mapel' => $getMapel,
            'soals' => $getSoalMapel
        ];

        return view('guru/try_out_add', $data);
    }

    // buat soal
    public function store()
    {

        try {
            //code...
            $this->bankSoalModel->save([
                'id_mapel' => $this->request->getVar('id_mapel'),
                'soal' => $this->request->getVar('soal'),
                'a' => $this->request->getVar('a'),
                'b' => $this->request->getVar('b'),
                'c' => $this->request->getVar('c'),
                'd' => $this->request->getVar('d'),
                'kunci' => $this->request->getVar('kunci')
            ]);

            return redirect()->back()->withInput()->with('success', 'berhasil menambahkan data soal !');


            // return redirect()->back()->withInput()->with('error', 'gagal menambahkan data soal !');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan pada server !');
        }
    }


    // edit soal
    public function editSoal($id, $id_mapel)
    {
        // echo "edit soal";
        $getSoalMapel = $this->bankSoalModel->find($id);
        // dd($getSoalMapel);

        $data = [
            'nav' => 4,
            // 'mapel' => $getMapel,
            'id_mapel' => $id_mapel,
            'soal' => $getSoalMapel
        ];
        return view('guru/try_out_edit', $data);
    }

    // update soal
    public function updateSoal()
    {
        try {
            $id = $this->request->getVar('id');
            $id_mapel = $this->request->getVar('id_mapel');
            $this->bankSoalModel->update($id, [
                'soal' => $this->request->getVar('soal'),
                'a' => $this->request->getVar('a'),
                'b' => $this->request->getVar('b'),
                'c' => $this->request->getVar('c'),
                'd' => $this->request->getVar('d'),
                'kunci' => $this->request->getVar('kunci')
            ]);

            return redirect()->to('/guru/tryOut/show/' . $id_mapel)->with('success', 'berhasil melakukan update soal !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->to('/guru/tryOut/show/' . $id_mapel)->with('error', 'Terjadi kesalahan pada server !');
        };
    }

    // delete soal
    public function deleteSoal($id)
    {
        $this->bankSoalModel->delete($id);
        return redirect()->back()->with('success', 'Berhasil menghapus data soal !');
    }
}
