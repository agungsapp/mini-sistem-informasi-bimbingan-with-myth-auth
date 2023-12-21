<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroupSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'admin',
                'description' => 'Administrator'
            ],
            [
                'name'        => 'guru',
                'description' => 'Guru'
            ],
            [
                'name'        => 'parent',
                'description' => 'Orang Tua'
            ],
            [
                'name'        => 'siswa',
                'description' => 'Siswa'
            ]
        ];

        // Simple Queries
        foreach ($data as $row) {
            $this->db->table('auth_groups')->insert($row);
        }

        // Using Query Builder
        // $this->db->table('auth_groups')->insertBatch($data);
    }
}
