<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbPengumuman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_pengumuman' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'isi_pengumuman' => [
                'type' => 'TEXT',
            ],
            'tanggal' =>[
                'type' => 'DATE',
            ]
        ]);
        // Primary Key
        $this->forge->addKey('id', true);
        // Create a Table
        $this->forge->createTable('tbl_pengumuman');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_pengumuman');
    }
}
