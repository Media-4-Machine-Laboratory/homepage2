<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class PdfController extends Controller {

    public function show_pdf($filename) {
        $pdfPath = FCPATH . 'cv/' . $filename; // 파일 경로 설정

        if (!file_exists($pdfPath)) {
            return redirect()->to('/')->with('error', '파일을 찾을 수 없습니다.');
        }

        return $this->response
            ->setHeader('Content-Type', 'application/pdf')
            ->setHeader('Content-Disposition', 'inline; filename="' . basename($pdfPath) . '"')
            ->setBody(file_get_contents($pdfPath));
    }
}
