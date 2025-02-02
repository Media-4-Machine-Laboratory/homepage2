<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table      = 'members';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'github', 'role', 'profile_image', 'cv_file'];

    // 특정 역할의 멤버 가져오기 (예: 교수, 박사과정, 석사과정 등)
    public function getMembersByRole($role)
    {
        return $this->where('role', $role)->findAll();
    }
}
