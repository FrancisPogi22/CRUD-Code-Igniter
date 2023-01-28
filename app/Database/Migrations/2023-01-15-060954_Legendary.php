<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Legendary extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'fullname' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'email' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'birthday' =>[
                'type' => 'DATE',
                'null' => true
            ],
            'password' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
