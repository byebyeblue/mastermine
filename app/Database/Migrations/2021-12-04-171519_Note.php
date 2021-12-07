<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Note extends Migration
{
    public function up()
    {
        #forge->addfield ini utk buat table
        $this->forge->addField([
            'note_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'deskripsi' => [
                'type' => 'TEXT',
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unique' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],

        ]);
        //addkey ini utk jadiin blogid ini PK
        $this->forge->addKey('note_id', true);
        $this->forge->createTable('note');
    }

    public function down()
    {
        //ini utk ngapus table/drop tabel baru abis tu create yg terbaru. ini berguna misal utk refresh blognya
        $this->forge->dropTable('note');
    }
}
