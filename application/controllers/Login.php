<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		if (@$this->session->userdata('contenedor_sess')->email) {
			redirect('home');
		}
		$this->load->view('login_page');
		$this->load->view('loginjs');
		
	}

	public function autenticar()
	{
		if ($this->input->post('email') && $this->input->post('password')) {
			$data= array(
				"email"=>$this->input->post('email'),
				"password"=>$this->input->post('password')
			);
			//decodificar
			$data_to_string=json_encode($data);
			//peticiones http
			$curl_request = curl_init("http://localhost/contenedoresApi/index.php/users/api/users");

			curl_setopt($curl_request,CURLOPT_CUSTOMREQUEST,"POST");
			curl_setopt($curl_request,CURLOPT_HTTPHEADER,array(
				"x-api-key: QWERTY",
				"Content-Type: application/json"
			));
			curl_setopt($curl_request,CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($curl_request,CURLOPT_POSTFIELDS,$data_to_string);

			$response = curl_exec($curl_request);
			if (!$response) {
				$response= json_encode(array(
					"status"=>curl_error($curl_request),
					"message"=>curl_errno($curl_request)
				));
			}

			curl_close($curl_request);
			$response =json_decode($response);
			echo var_dump($response);

			if ($response->status=="success") {
				$this->session->set_userdata('contenedor_sess',$response->data);
				redirect("home");
			}else{
				$this->session->set_flashdata('message',$response->message);
				redirect("login");
			}



			

		}else{
			//flashdata
			$this->session->set_flashdata('message',"No se envio parametros");
			redirect("login");
		}
		
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(login);
	}

}
