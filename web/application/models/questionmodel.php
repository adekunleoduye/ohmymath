<?php
/**
 * Created by JetBrains PhpStorm.
 * User: albertrosa
 * Date: 4/20/13
 * Time: 11:45 AM
 * To change this template use File | Settings | File Templates.
 */

class Questionmodel extends CI_Model{

    var $id;
    var $question;
    var $answerType;
    var $answer1;
    var $answer2;
    var $answer3;
    var $answer4;
    var $sportTheme;
    var $playername;
    var $headshot;

    function __construct(){
        parent::__construct();
    }

    function save(){
        $this->db->insert('questions', $this);
        return $this->db->insert_id();
    }

    function update($id){

        $this->db->where('id', $id);
        $this->db->update('questions', $this);
    }

    function getAll(){
        return $this->db->get('questions')->result();
    }

    function getById($id){
        $result = $this->db->get_where('questions', array('id'=>$id))->result();
        return $result[0];
    }

    function getRandom()
    {
        $this->db->order_by('id', 'RANDOM');
        $this->db->limit(1);
        $query = $this->db->get('questions');
        $result = $query->result();
        return $result[0];

    }


}