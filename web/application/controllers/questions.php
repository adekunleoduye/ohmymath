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

        $this->load->model('QuestionModel', 'questions');
        $questions = $this->questions->getAll();


        $this->load->view('questions/list', array('questions'=>$questions));
    }

    public function create (){
        $this->load->view('questions/create');
    }

    public function edit($id){

        $this->load->model('QuestionModel', 'questions');
        $question = $this->questions->getById($id);

        $this->load->view('questions/edit', $question);
    }

    public function save(){

        $question = $this->input->post('question');
        $answerType = $this->input->post('answerType');
        $answer1 = $this->input->post('answer1');
        $answer2 = $this->input->post('answer2');
        $answer3 = $this->input->post('answer3');
        $answer4 = $this->input->post('answer4');
        $sportTheme = $this->input->post('sport_theme');
        $playername = $this->input->post('playername');
        $headshot= $this->input->post('headshot');


        $id = $this->input->post('id');




        if($question != "" && $answerType != ''){
//
//            var_dump($_POST);die;

            $this->load->model('QuestionModel', 'question');
            $this->question->question = $question;
            $this->question->answerType = $answerType;
            $this->question->sportTheme = $sportTheme;
            $this->question->answer1 = $answer1;
            $this->question->answer2 = $answer2;
            $this->question->answer3 = $answer3;
            $this->question->answer4 = $answer4;
            $this->question->playername = $playername;
            $this->question->headshot = $headshot;

            if($id == null)
                $id = $this->question->save();
            else{
                $this->question->id = $id;
                $this->question->update($id);
            }

            redirect('/questions/edit/'.$id);


        } else {
            $data = array();
            $this->load->view('questions/create', $data);
        }

    }

}