<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;
use App\Entities\UserInfo;

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
    protected $beforeInsert = ['addGroup'];
    protected $afterInsert = ['addUserInfoDB'];
    // protected $beforeUpdate = [];
    // protected $afterUpdate = [];
    // protected $beforeFind = [];
    // protected $afterFind = [];
    // protected $beforeDelete = [];
    // protected $afterDelete = [];
    protected $assignGroup;
    protected $userInfo;

    protected function addGroup($data)
    {
        $data['data']['id_group'] = $this->assignGroup;
        return $data;
    }

    public function withtgroup(String $groupName)
    {
        $row = $this->db
            ->table('groups')
            ->where('name', $groupName)
            ->get()
            ->getFirstRow();

        if ($row) {
            $this->assignGroup = $row->id_group;
        }
    }

    public function addUserInfo(UserInfo $userInfo)
    {
        $this->userInfo = $userInfo;
    }

    protected function addUserInfoDB($data)
    {
        $this->userInfo->id_user = $data['id'];
        $model = model('UsersInfoModel');
        $model->insert($this->userInfo);
    }

    public function UserBy(string $colum, String $value)
    {
        return $this->where($colum, $value)->first();
    }
}
