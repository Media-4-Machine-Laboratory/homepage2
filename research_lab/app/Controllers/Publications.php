<?php

namespace App\Controllers;

use App\Models\PublicationModel;

class Publications extends BaseController
{
    public function index()
    {
        $model = new PublicationModel();
        $conference = $model->where("category", "Conference")->findAll();
        $journal = $model->where("category", "Journal")->findAll();
        $patent = $model->where("category", "Patent")->findAll();

        return view('publications',
    [
        'conference' => $conference,
        'journal' => $journal,
        'patent' => $patent
    ]);
    }
}
