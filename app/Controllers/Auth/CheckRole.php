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

        if (logged_in()) {
            // pengecekan role
            if (in_groups('admin')) {
                return redirect()->to('/admin/admin');
            } else if (in_groups('guru')) {
                return redirect()->to('/guru/home');
            } else if (in_groups('parent')) {
                return redirect()->to('/parent/home');
            } else if (in_groups('siswa')) {
                return redirect()->to('/siswa/home');
            } else {
                echo "anda tidak valid!";
            }
        } else {
            return redirect()->to('/welcome');
        }
    }
}


// sampai berhasil redirect role user by rrole group . kurang implemengtasi skenario