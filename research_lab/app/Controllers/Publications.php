<?php

namespace App\Controllers;

class Publications extends BaseController
{
    public function index()
    {
        return view('publications'); // 'landing.php' 뷰 파일 로드
    }
}
