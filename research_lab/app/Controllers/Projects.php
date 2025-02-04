<?php

namespace App\Controllers;

class Projects extends BaseController
{
    public function index()
    {
        return view('projects'); // 'landing.php' 뷰 파일 로드
    }
}
