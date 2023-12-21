<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroupUsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'group_id'        => 1,
                'user_id' => 1,
            ],
        ];

        // Simple Queries
        // foreach ($data as $row) {
        //     $this->db->table('auth_groups')->insert($row);
        // }

        // Using Query Builder
        $this->db->table('auth_groups_users')->insertBatch($data);
    }
}
