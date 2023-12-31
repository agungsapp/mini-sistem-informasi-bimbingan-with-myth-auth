<?php

namespace App\Models;

use CodeIgniter\Model;

class MapelModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mapel';
    protected $primaryKey       = 'id_mapel';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul', 'deskripsi', 'hari', 'jam', 'id_user'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

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


    public function getMapelWithGuru()
    {
        $query   = $this->db->query('SELECT m.id_mapel, m.judul, m.hari, m.jam, u.nama as guru FROM mapel m
        JOIN users u on u.id = m.id_user');
        $results = $query->getResult();

        return $results;
    }

    public function getMapelByIdGuru($id)
    {
        $query   = $this->db->query('SELECT m.id_mapel, m.judul, m.hari, m.jam, u.nama as guru FROM mapel m
        JOIN users u on u.id = m.id_user WHERE m.id_user =' . $id);
        $results = $query->getResult();

        return $results;
    }

    public function getMapelSoal()
    {
        $query = $this->db->query("
        SELECT m.id_mapel, m.judul, m.deskripsi, m.hari, m.jam, m.created_at, m.updated_at, b.id,
            CASE 
                WHEN COUNT(b.id_mapel) > 0 THEN 'true'
                ELSE 'false' 
            END AS is_have
        FROM mapel m
        LEFT JOIN bank_soal b ON b.id_mapel = m.id_mapel
        GROUP BY m.id_mapel, m.judul, m.deskripsi, m.hari, m.jam, m.created_at, m.updated_at;
        ");

        $results = $query->getResult();

        return $results;
    }
}
