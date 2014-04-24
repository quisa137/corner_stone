<?php
/**
 * 표준 게시판 
 *
 */
class Lecture extends CI_Controller {
    /**
     * 리스트 or 뷰
     * 
     * @access  public
     * @param 글 번호 있으면 view 없으면 list id
     */
    public function index($id = ''){
        $this->load->model('Lecturemodel');
        if(!empty($id) && preg_match("/\d+/", $id)){

        }else{
            $data['query'] = $this->Lecturemodel->getEntries();
            $this->load->view('layout/header');
            $this->load->view('layout/gnb');
            $this->load->view('list',$data);
            $this->load->view('layout/footer');
        }
    }

    // --------------------------------------------------------------------

    /**
     * 수정 or 쓰기
     * 
     * @access  public
     * @param 글 번호 있으면 modify 없으면 write id
     */
    public function edit($id = ''){
        if(!empty($id) && preg_match("/\d+/", $id)){

        }else{
            
        }
    }

    // --------------------------------------------------------------------

    /**
     * 삭제
     * 
     * @access  public
     * @param 글 번호 반드시 필요 id
     */
    public function delete($id){
        if(!empty($id) && preg_match("/\d+/", $id)){

        }
    }

}
?>