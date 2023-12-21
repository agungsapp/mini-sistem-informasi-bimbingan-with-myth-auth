<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MataPelajaran extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id_mapel' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi' => [
                'type'       => 'TEXT',
            ],
            'hari' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'jam' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
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
        $this->forge->addKey('id_mapel', true);
        $this->forge->createTable('mapel');
    }

    public function down()
    {
        //
        $this->forge->dropTable('mapel');
    }
}
