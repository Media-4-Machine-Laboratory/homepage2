<?php

namespace App\Models;

use CodeIgniter\Model;

class PublicationModel extends Model
{
    protected $table      = 'publications'; // 테이블 이름
    protected $primaryKey = 'id'; // 기본 키

    protected $allowedFields = ['title', 'authors', 'category', 'venue', 'year']; // 수정 가능한 필드

    // 논문 데이터 가져오기 (Conference 또는 Journal 필터링 가능)
    public function getPublications($category = null)
    {
        if ($category) {
            return $this->where('category', $category)->findAll();
        }
        return $this->findAll();
    }
}
