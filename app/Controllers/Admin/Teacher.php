<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// use App\Models\UserModel;
use PDO;
use Myth\Auth\Config\Auth as AuthConfig;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;

class Teacher extends BaseController
{

    protected $userModel;
    protected $db;

    protected $session, $config, $auth;
    /**
     * @var AuthConfig
     */
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->db = \Config\Database::connect();

        // Start the session
        $this->session = service('session');

        // Load Myth\Auth configuration
        $this->config = config('Auth');

        // Load authentication service
        $this->auth = service('authentication');
    }

    public function index()
    {

        $getGuru = $this->db->table('users')
            ->select('users.*')
            ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('auth_groups.id', 2)
            ->get();

        $guru = $getGuru->getResult();

        $data = [
            'guru' => $guru,
        ];


        // dd($data['guru']);

        return view('admin/teacher', $data);
    }


    public function registerGuru()
    {


        $users = model(UserModel::class);

        // Aturan validasi dasar
        $rules = [
            'username' => 'required|alpha_numeric_space|min_length[3]|max_length[30]|is_unique[users.username]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|strong_password',
            'pass_confirm' => 'required|matches[password]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Simpan pengguna
        $allowedPostFields = array_merge(
            ['password'],
            [
                'email',
                'username',
            ],
            ['nama']
        );
        $user = new User($this->request->getPost($allowedPostFields));
        $user->activate();

        if (!$users->save($user)) {
            return redirect()->back()->withInput()->with('errors', $users->errors());
        }

        // Dapatkan ID pengguna yang baru disimpan
        $userId = $users->getInsertID();

        // Tambahkan pengguna ke grup guru
        $authorization = service('authorization');
        $groupModel = new \Myth\Auth\Models\GroupModel();
        $group = $groupModel->where('name', 'guru')->first();
        if ($group) {
            $authorization->addUserToGroup($userId, $group->id);
        }

        // Sisipkan logika tambahan jika diperlukan, misalnya mengirim email aktivasi

        // Sisipkan return yang diinginkan di sini
        return redirect()->back()->with('success', 'Berhasil melakukan pendaftaran guru !');
    }



    public function edit($id)
    {

        $guru = $this->userModel->find($id);
        // dd($guru);
        $data = [
            'guru' => $guru
        ];

        return view('admin/teacher_edit', $data);

        // view teacher edit belum di edit  
    }


    public function update()
    {
        $id = $this->request->getVar('id');

        $userModel = new UserModel();

        try {
            //code...
            $userModel->update($id, [
                'nama' => $this->request->getVar('nama'),
                // 'email' => $this->request->getVar('email'),
            ]);

            if ($userModel->errors()) {
                dd($userModel->errors());
            }

            session()->setFlashdata('success', 'Update data guru berhasil !');
            return redirect()->to('/admin/teacher');
        } catch (\Throwable $th) {
            // throw $th;
            session()->setFlashdata('error', 'Terjadi kesalahan pada server !');
        }
    }



    public function delete($id)
    {
        $delete = $this->userModel->delete($id);

        if ($delete) {
            session()->setFlashdata('success', 'Delete data guru berhasil !');
            return redirect()->to('/admin/teacher');
        } else {
            session()->setFlashdata('error', 'Delete data guru gagal !');
            return redirect()->to('/admin/teacher');
        }
    }
}
