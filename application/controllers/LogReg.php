<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class LogReg extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('LogReg_m');
			$this->load->library('session');
		}

		function index(){
			
			$this->load->view('UserRegister');
		}

		function logon(){
			/*$this->load->view('layout/header');*/
			$this->load->view('UserRegister');
			/*$this->load->view('layout/footer');*/
		}
		
		function reg(){
			
			$this->load->view('UserRegister');
		}
		function url(){
			$this->load->view('search');
		}
		function back(){
			$this->load->view('Home');
		}

		function registration(){

		if($this->input->post('creg'))
		{
				$data['exname']=$this->input->post('exname');
				$data['exemail']=$this->input->post('exemail');
				$data['expass']=md5($this->input->post('expass'));
				$this->load->model('LogReg_m');
				$status=$this->LogReg_m->insertuser($data);
				if($status==true){
					redirect('LogReg/logon');
				}
				else{
					echo 'Registration Failed';
				
				$this->load->view('LogReg/reg');
			}
		}
	}	

		function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('exemail', 'Email Address', 'required');
		$this->form_validation->set_rules('expass', 'Password', 'required');
		if($this->form_validation->run() == TRUE){

				$emailid = $this->input->post('exemail');
				$pwd = $this->input->post('expass');
				/*echo $emailid."<br>";
				echo md5($pwd);
				die();*/

				$this->load->model('LogReg_m');
				$result=$this->LogReg_m->login($emailid,md5($pwd));

				if($this->LogReg_m->login($emailid, md5($pwd))){
					$session_data = array(
						'emailid' => $emailid,	

						'exname'=>$result->exname,
					);

					/*print_r($session_data);die();	*/
					$this->session->set_userdata($session_data);
					redirect(base_url() . 'LogReg/dashboard');
					echo "Success";
					/*die();*/
					}
					/*if(isset($session_data)){
						echo "session set";
						var_dump($session_data);
						die();
					}*/
					else
					{
						$this->session->set_flashdata('error','Invalid username or password');
						redirect(base_url() . 'LogReg/registration');

						//header("Location: ./dashboard");
						
						/*echo "Failed";
						var_dump($session_data);*/
						
						/*redirect(base_url() . 'LogReg/logon');*/
					}
				}
		else
		{
			$this->logon();
		}
	}

	function dashboard(){
		if($this->session->userdata('exname') != ''){

					/*echo '<h2>Welcome - '.$this->session->userdata('emailid').'</h2>';
					echo '<label><a href="'. base_url() . 'CusRegister/logout">Logout</a></label>';*/
					$this->load->view('Home');

		}
		else
		{
			redirect(base_url() . 'LogReg/logon');
		}
					
	}
	function logout(){
		$this->session->unset_userdata('exname');
		redirect(base_url() . 'LogReg/logon');
	}

	}
?>