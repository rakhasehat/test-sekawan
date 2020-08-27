<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('employee_model');
	}
	
    function index(){
        $this->load->view('employee_view');
    }
 
    function employee_data(){
        $data = $this->employee_model->employee_list();
        echo json_encode($data);
    }
 
    function save(){
        $data=$this->employee_model->save_product();
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->employee_model->update_product();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->employee_model->delete_product();
        echo json_encode($data);
    }
 
}

?>
