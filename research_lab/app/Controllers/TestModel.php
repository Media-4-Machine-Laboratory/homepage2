<?php

namespace App\Controllers;

use App\Models\PublicationModel;
use App\Models\ProjectModel;
use App\Models\MemberModel;

class TestModel extends BaseController
{
    public function index()
    {
        $publicationModel = new PublicationModel();
        $projectModel = new ProjectModel();
        $memberModel = new MemberModel();

        echo "<h3>📚 Publications (논문)</h3>";
        print_r($publicationModel->getPublications());

        echo "<h3>🚀 Active Projects (진행 중인 프로젝트)</h3>";
        print_r($projectModel->getActiveProjects());

        echo "<h3>👨‍🎓 Professors (교수진)</h3>";
        print_r($memberModel->getMembersByRole('Professor'));
    }
}
