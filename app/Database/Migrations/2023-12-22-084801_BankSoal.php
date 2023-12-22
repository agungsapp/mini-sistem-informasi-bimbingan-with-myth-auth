<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BankSoal extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_mapel' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'soal' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'a' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'b' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'c' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'd' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kunci' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
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
        $this->forge->createTable('bank_soal');
    }

    public function down()
    {
        //
        $this->forge->dropTable('bank_soal');
    }
}
