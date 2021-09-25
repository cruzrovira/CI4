<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 12,
                'unsigned' => true,
                'auto_increment' => true,
                'null' => false
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
                'null' => false
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'delete_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('categories');

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('categories');
    }
}