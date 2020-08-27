<?php 

class Employee_model extends CI_Model{
 
    function employee_list(){
        $hasil = $this->db->get('employees');
        return $hasil->result();
    }
 
    function save_product(){
        $data = array(
                'employee_name'  => $this->input->post('employee_name'), 
                'employee_salary'  => $this->input->post('employee_salary'), 
                'employee_age' => $this->input->post('employee_age'), 
            );
        $result = $this->db->insert('employees', $data);
        return $result;
    }
 
    function update_product(){
		$id = $this->input->post('id');
        $employee_name = $this->input->post('employee_name');
        $employee_salary = $this->input->post('employee_salary');
		$employee_age = $this->input->post('employee_age');
		$profile_image = $this->input->post('profile_image');
 
        $this->db->set('employee_name', $employee_name);
		$this->db->set('employee_salary', $employee_salary);
		$this->db->set('employee_age', $employee_age);
		$this->db->set('profile_image', $profile_image);
        $this->db->where('id', $id);
        $result=$this->db->update('employees');
        return $result;
    }
 
    function delete_product(){
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $result=$this->db->delete('id');
        return $result;
    }
     
}

?>
