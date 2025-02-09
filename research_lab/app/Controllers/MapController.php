<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MapController extends Controller
{
    public function getApiKey()
    {
        $apiKey = getenv('KAKAO_MAP_API_KEY');
        return $this->response->setJSON(['apiKey' => $apiKey]);
    }
}
