<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'        => 'administrator',
                'username' => 'administrator',
                'email' => 'admin@gmail.com',
                'password_hash' => password_hash('admin123', PASSWORD_DEFAULT),
            ],
        ];

        // Simple Queries
        // foreach ($data as $row) {
        //     $this->db->table('auth_groups')->insert($row);
        // }

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}
