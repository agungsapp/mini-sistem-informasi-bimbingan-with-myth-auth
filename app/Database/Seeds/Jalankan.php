<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Jalankan extends Seeder
{
    public function run()
    {
        //
        $this->call('AuthGroupSeeder');
        $this->call('AdminSeeder');
        $this->call('AuthGroupUsersSeeder');
    }
}
