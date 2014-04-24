<?php
class Lecturemodel extends CI_Model {

    function getEntries($listSize=10,$page=1){
        $query = $this->db->get('lectures', $listSize,($page - 1) * $listSize);
        return $query->result();
    }
    function insert(){
        // $this->input->post('');
    }
    function update(){

    }
    function delete(){

    }
}
?>