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

        for ($i = 0; $i < count($data['members']);) {
            $data['members'][$i]['image_url'] = $this->get_member_image($data['members'][$i]['en_name']);
            $i++;
        }

        return view('members', $data);
    }

    public function jeongilseo() {
        return view('member_jeongilseo');
    }

    public function member_details($name) {
        $model = new MemberModel();

        $member = $model->where('en_name', $name)->first();
        $member['image_url'] = $this->get_member_image($member['en_name']);
        
        $rawlinks = explode(',', $member['links']);
        $rawlinks = array_map('trim', $rawlinks);

        $links = [];
        foreach ($rawlinks as $link) {
            $parts = explode(':', $link, 2);
            if (count($parts) == 2) {
                $key = trim($parts[0]);
                $value = trim($parts[1]);

                if (!empty($value)) {
                    switch ($key) {
                        case 'github':
                            $links[$key] = "https://github.com/$value";
                            break;
                        case 'linkedin':
                            $links[$key] = "https://linkedin.com/$value";
                            break;
                        default:
                            $links[$key] = $value;
                            break;
                    }
                }
            }
        }

        return view('member_details', [
            'member' => $member,
            'links' => $links
        ]);
    }

    public function get_member_image($en_name) {
        $webp = FCPATH . 'images/profile_image/' . $en_name . '.webp';
        $png = FCPATH . 'images/profile_image/' . $en_name . '.png';

        $image_url = "";
        if (file_exists($webp)) {
            $image_url = base_url('images/profile_image/' . $en_name . '.webp');
        } else if (file_exists($png)) {
            $image_url = base_url('images/profile_image/' . $en_name . '.png');
        }

        return $image_url;
    }
}
