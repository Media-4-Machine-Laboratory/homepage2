<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing'); // 'landing.php' 뷰 파일 로드
    }
}
