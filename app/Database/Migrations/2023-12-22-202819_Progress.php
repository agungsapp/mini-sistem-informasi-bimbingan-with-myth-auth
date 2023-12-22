<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Progress extends Migration
{
    public function up()
    {
        //
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_siswa' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'id_mapel' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'score' => [
                'type'       => 'INT',
                'constraint' => 20,
                'unsigned'       => true,
            ],
            'komentar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'      => 'DATETIME',
                'null'      => true,
            ],
            'updated_at' => [
                'type'      => 'DATETIME',
                'null'      => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('progres');
    }

    public function down()
    {
        //
        $this->forge->dropTable('progres');
    }
}
