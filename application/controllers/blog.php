<?php
class Blog extends CI_Controller {
    public function index(){
        $data['todo_list'] = array('Clean Houst','Call mom','Run Errands');
        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";

        $this->load->view('blogview', $data,false);
    }
    public function comments(){
        echo 'Look at this';
    }
    public function shoes($sandals, $id){
        echo $sandals;
        echo $id;
    }
    /*
    public function _remap($method){
        if($method=='some_method'){
            $this->$method();
        }else{
            $this->default_method();
        }
    }
    public function _remap($method, $param = array()){
        $method = 'process_'.$method;
        if(method_exists($this, $method)){
            return call_user_func_array(array($this, $method), $param);
        }
        show_404();
    }
    */
}
?>