<?php

namespace App\Controllers\Guru;

use App\Controllers\BaseController;

class Salary extends BaseController
{
    public function index()
    {
        //
        $data = [
            'nav' => 2
        ];
        return view('guru/salary', $data);
    }
}
