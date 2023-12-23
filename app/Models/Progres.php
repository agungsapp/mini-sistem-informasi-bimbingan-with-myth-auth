<?php

namespace App\Models;

use CodeIgniter\Model;

class Progres extends Model
{
    protected $table            = 'progres';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_siswa', 'id_mapel', 'score', 'komentar'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    protected $db;


    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function getDataKomentar($id_guru)
    {
        $query = $this->db->query("SELECT u.nama as siswa, p.id , p.score, m.judul as mapel, p.komentar FROM progres p
JOIN mapel m ON m.id_mapel = p.id_mapel
JOIN users u ON u.id = p.id_siswa
WHERE m.id_user = $id_guru")->getResult();

        return $query;
    }
    public function getDataKomentarBySiswa($id_siswa)
    {
        $query = $this->db->query("SELECT u.nama as siswa, p.id , p.score, m.judul as mapel, p.komentar FROM progres p JOIN mapel m ON m.id_mapel = p.id_mapel JOIN users u ON u.id = p.id_siswa WHERE p.id_siswa = $id_siswa")->getResult();

        return $query;
    }
}
