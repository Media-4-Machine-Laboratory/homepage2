<?php

namespace App\Controllers;

use App\Models\MemberModel;
use CodeIgniter\Controller;

class MembersController extends BaseController
{
    public function index()
    {
        $model = new MemberModel();
        $data['members'] = $model->findAll(); // 데이터베이스에서 모든 구성원 가져오기
        return view('members', $data);
    }

    public function jeongilseo() {
        return view('member_jeongilseo');
    }
}
