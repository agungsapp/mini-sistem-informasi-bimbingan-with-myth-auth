<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $currentTime = Time::now();

        $data = [
            'username'      => 'administrator',
            'email'         => 'admin@gmail.com',
            'password_hash' => '$2y$10$mvsJZwCKxrjFrNxhbT7xqeuHFB/xWiOGsFvmGIg46wsdTmXbE0DUK',
            'active'        => 1, // Mengatur status aktif
            'created_at'    => $currentTime->toDateTimeString(), // Timestamp saat ini
            'updated_at'    => $currentTime->toDateTimeString(), // Timestamp saat ini
        ];

        // Memasukkan data user
        $this->db->table('users')->insert($data);
    }
}
