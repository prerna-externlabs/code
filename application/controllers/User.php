<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index(){
		$this->load->model('Usermodel'); 
		$users= $this->Usermodel->all();
		$data = array();
		$data['users'] = $users;
		$this->load->view('list',$data);
	}

	public function created()
	{

		$this->load->model('Usermodel'); 
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Name','required|valid_email');

		if($this->form_validation->run() == false) {
			$this->load->view('create');
			
		}else{
			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['email'] = $this->input->post('email');
			$formArray['created_at'] = date('Y-m-d');
			$this->Usermodel->create($formArray);
			$this->session->set_flashdata('success','Record added successfully');
			redirect(base_url(). 'user/index');
		}	
	}

	public function edit($userId){
		$this->load->model('Usermodel'); 
		$user= $this->Usermodel->getuser($userId);
		$data = array();
		$data['user'] = $user;

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Name','required|valid_email');

		if($this->form_validation->run() == false){
			$this->load->view('edit',$data);
		}
		else{
			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['email'] = $this->input->post('email');
			$formArray['created_at'] = date('Y-m-d');
			$this->Usermodel->updateuser($userId,$formArray);
			$this->session->set_flashdata('success','Record Updated Successfully');
			redirect(base_url(). 'user/index');

		}
	}

	public function delete($userId){
		$this->load->model('Usermodel'); 
		$user = $this->Usermodel->getuser($userId);
		if(empty($user)){
			$this->session->set_flashdata('failure','Record not found');
			redirect(base_url(). 'user/index');
		}
		$this->Usermodel->deleteuser($userId);
		$this->session->set_flashdata('success','Record delete Successfully');
		redirect(base_url(). 'user/index');

		
	}

	

}

