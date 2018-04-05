<?php

class Home extends CI_Controller
{
public function index()
{	
	
	$this->load->view ("home_v");
}





function save(){
$this->load->library('form_validation');



	$this->load->model("main_model");
	$data = 
		array (

		"name" =>$this->input->post("name"),
		"email" =>$this->input->post("email"),
		"phone" => $this->input->post("phone"),
		"city" =>$this->input->post("city"),
		"mark" =>$this->input->post("mark"),
		"modele" =>$this->input->post("modele")
	);
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('name','Name','required');
		if($this->form_validation->run()) 
		{
			$this->main_model->insert($data);
			redirect(base_url() . "Home/inserted");
		 }
		else
			{
				
				$this->index();
			}

	}
function inserted()
{
	
	
	$this->index();

}
}


?>