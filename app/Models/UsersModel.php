<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;
use CodeIgniter\Database\SQLite3\Table;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = User::class;

    protected $useSoftDeletes = true;
    // protected $protectFields = true;
    protected $allowedFields = ['username', 'email', 'password', 'id_group'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    // protected $validationRules = [];
    // protected $validationMessages = [];
    // protected $skipValidation = false;
    // protected $cleanValidationRules = true;

    // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert = [];
    // protected $afterInsert = [];
    // protected $beforeUpdate = [];
    // protected $afterUpdate = [];
    // protected $beforeFind = [];
    // protected $afterFind = [];
    // protected $beforeDelete = [];
    // protected $afterDelete = [];
    protected $assignGroup;

    public function withtgroup(String $groupName)
    {
        $row = $this->db
            ->table('groups')
            ->where('name', $groupName)
            ->get()
            ->getFirstRow();
        if ($row !== null) {
            $this->assignGroup = $row->id_group;
        }
    }
}
