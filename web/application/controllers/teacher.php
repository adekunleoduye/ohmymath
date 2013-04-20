<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher extends CI_Controller {


    public function index()
    {
        $this->load->view('teacher/login');
    }


}