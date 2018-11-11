<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function index() {
		    $this->load->view('welcome_student');
    }

    public function detail($stu_id = 0) {
        $result = $this->Stu->get_student_by_id($stu_id);
        if(empty($result)) {
            $array = array('success' => false,'data' => 'Student not found');
        } else {
            $data['id'] = $result->stu_id;
            $data['firstname'] = $result->stu_fname;
            $data['lastname'] = $result->stu_lname;
            $data['address'] = $result->stu_address;
            $data['phonenumber'] = $result->stu_phonenumber;
            $data['email'] = $result->stu_email;
            $edu['faculty'] = $result->fac_name;
            $edu['major'] = $result->maj_name;
            $data['education']  = $edu;
            $array = array('success' => true,'data' => $data);
        }
        $this->load->view('json',$array);
    }

    public function major($maj_id = 0) {
        $result = $this->Stu->get_student_by_majorid($maj_id);
        if(empty($result)) {
            $array = array('success' => false,'data' => 'Student not found');
        } else {
            foreach ($result as $r) {
                $d['id'] = $r->stu_id;
                $d['firstname'] = $r->stu_fname;
                $d['lastname'] = $r->stu_lname;
                $data[] = $d;
            }
            $array = array('success' => true,'data' => $data);
        }
        $this->load->view('json',$array);
    }

}
