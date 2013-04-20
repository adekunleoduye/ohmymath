<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function profile(){
        $this->load->view('profile');
    }

    public function questions(){
        $this->load->model('QuestionModel', 'questions');
        $question = $this->questions->getRandom();

        $this->load->view('questions', $question);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */