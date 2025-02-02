<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table      = 'projects';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'description', 'start_date', 'end_date', 'is_active'];

    // 현재 진행 중인 프로젝트만 가져오기
    public function getActiveProjects()
    {
        return $this->where('is_active', true)->findAll();
    }
}
