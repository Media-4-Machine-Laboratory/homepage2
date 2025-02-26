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

        $conference = $this->addImagePath($conference, 'paper');
        $conference = $this->addImagePath($conference, 'poster');
        $journal = $this->addImagePath($journal, 'paper');

        return view('publications',
        [
            'conference' => $conference,
            'journal' => $journal,
            'patent' => $patent
        ]);
    }

    public function addImagePath($publications, $root_dir) {
        foreach($publications as &$publication) {
            $imagePath = 'images/publication/' . $root_dir . '/' . $publication['title'] . '.png';

            if (file_exists($imagePath)) {
                $publication[$root_dir] = $imagePath;
            } else {
                $publication[$root_dir] = null;
            }
        }

        return $publications;
    }
}
