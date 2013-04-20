<?php
/**
 * Created by JetBrains PhpStorm.
 * User: albertrosa
 * Date: 4/20/13
 * Time: 7:50 AM
 * To change this template use File | Settings | File Templates.
 */

class questions extends CI_Controller {



    public function index()
    {
        $this->load->view('questions/list');
    }

    public function create (){
        $this->load->view('questions/create');
    }

    public function edit(){
        $this->load->view('questions/edit');
    }

}