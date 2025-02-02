<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectMemberModel extends Model
{
    protected $table      = 'project_members';
    protected $primaryKey = 'id';

    protected $allowedFields = ['member_id', 'project_id'];

    // 특정 프로젝트에 참여한 멤버 가져오기
    public function getMembersByProject($project_id)
    {
        return $this->where('project_id', $project_id)->findAll();
    }

    // 특정 멤버가 참여한 프로젝트 가져오기
    public function getProjectsByMember($member_id)
    {
        return $this->where('member_id', $member_id)->findAll();
    }
}
