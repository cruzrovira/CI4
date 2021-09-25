<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupsSeeder extends Seeder
{
    public function run()
    {
        $group = [
            [
                'name' => 'user',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ] ;
        $this->db->table('groups')->insertBatch($group);
    }
}
