<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Major extends CI_Controller {

    public function index() {
		    $this->load->view('welcome_major');
    }

    public function faculty($fac_id = 0) {
        $result = $this->Maj->get_major_by_facultyid($fac_id);
        if(empty($result)) {
            $array = array('success' => false,'data' => 'Major not found');
        } else {
            foreach ($result as $r) {
                $d['code'] = (int)$r->maj_id;
                $d['name'] = $r->maj_name;
                $data[] = $d;
            }
            $array = array('success' => true,'data' => $data);
        }
        $this->load->view('json',$array);
    }


}
