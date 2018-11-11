<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller {

    public function index() {
		    $this->load->view('welcome_faculty');
    }

    public function all() {
        $result = $this->Fac->list_faculties();
        foreach ($result as $r) {
            $d['code'] = (int)$r->fac_id;
            $d['name'] = $r->fac_name;
            $data[] = $d;
        }
        $array = array('success' => true,'data' => $data);
        $this->load->view('json',$array);
    }

}
