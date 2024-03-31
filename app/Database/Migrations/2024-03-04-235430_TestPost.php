<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TestPost extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '11'
            ],
            'name' =>[
                'type'=>'VARCHAR',
                'constraint'=>'50'
            ]
            ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('posts');
    }

    public function down()
    {
        //
    }
}
