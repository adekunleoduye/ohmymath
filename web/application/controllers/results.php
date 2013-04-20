<?php
/**
 * Created by JetBrains PhpStorm.
 * User: albertrosa
 * Date: 4/20/13
 * Time: 7:50 AM
 * To change this template use File | Settings | File Templates.
 */

class results extends CI_Controller {


    public function index()
    {
        $this->load->view('results/list');
    }

    public function create (){
        $this->load->view('results/create');
    }

    public function edit(){
        $this->load->view('results/edit');
    }

}