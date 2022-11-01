<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DbKegiatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kajian' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_kajian' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_ustad' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'hari' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'judul_kajian' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            
        ]);
        // Primary Key
        $this->forge->addKey('id', true);
        // Create a Table
        $this->forge->createTable('tbl_kegiatan');
    }


    public function down()
    {
        $this->forge->dropTable('tbl_kegiatan');
    }
}
