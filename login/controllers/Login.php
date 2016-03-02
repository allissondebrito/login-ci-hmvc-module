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

		if($this->Login_model->logar($emailAdmin,$senhaAdmin))
		{
			echo 'Usuário encontrado'; // Ação executada caso o usuário seja validado
		}
		else
		{
			echo 'Usuário não encontrado'; //Ação Executada caso o usuário não seja encontrado
		}
	}

}

/* End of file Login.php */
/* Location: ./application/modules/login/controllers/Login.php */