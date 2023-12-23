<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class CheckRole extends BaseController
{
    public function index()
    {
        //
    }

    public function check_role()
    {

        // Dapatkan Database Builder
        // $db = \Config\Database::connect();

        // ID pengguna
        // $id = user_id(); 
        // dd(user_id(), logged_in(), in_groups('siswa'));

        // Buat dan jalankan query
        // $query = $db->table('auth_groups_users')
        //     ->where('user_id', $id)
        //     ->get();

        // Dapatkan hasilnya
        // $result = $query->getResultArray();

        // Tampilkan hasil (atau bisa juga diproses lebih lanjut)
        // dd();

        // $role  = $result[0]['group_id'];
        // dd($role);

        // check login

        // dd(in_groups('guru'));

        if (logged_in()) {
            // pengecekan role
            if (in_groups('admin')) {
                return redirect()->to('/admin/dashboard');
            } else if (in_groups('guru')) {
                return redirect()->to('/guru/home');
            } else if (in_groups('parent')) {
                return redirect()->to('/parent/home');
            } else if (in_groups('siswa')) {
                return redirect()->to('/siswa/home');
            } else {
                echo "anda guest!";
            }
        } else {
            return redirect()->to('/login');
        }
    }
}


// sampai berhasil redirect role user by rrole group . kurang implemengtasi skenario