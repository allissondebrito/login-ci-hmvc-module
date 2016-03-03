<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Controller Class do Módulo de Login com HMVC
class Login extends CI_Controller {

	// Método de exibição da página de login (formulário)
	public function index()
	{
		$data['loginView'] = 'login'; //login.php (view)
		$this->load->view($data['loginView']); 
	}

	// Método executado após o submit do formulário de login
	public function logar()
	{
		$this->load->model('Login_model'); //Model Login

		$emailAdmin = $this->input->post('emailAdmin'); //Input Text E-mail (emailAdmin)
		$senhaAdmin = md5($this->input->post('senhaAdmin')); // Input Password Senha (senhaAdmin)

		if($this->Login_model->logar($emailAdmin,$senhaAdmin)) //Caso retorne TRUE 
		{
			redirect(base_url('welcome/teste')); //Exemplo de redirect 
		}
		else //Caso retorne FALSE
		{
			redirect(base_url('login'));
		}
	}

	public function logout()
	{
		$this->load->model('Login_model');
		if($this->Login_model->logout())
		{
			redirect(base_url('login'));
		}
	}

}

/* End of file Login.php */
/* Location: ./application/modules/login/controllers/Login.php */