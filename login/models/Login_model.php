<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Model Class do Módulo de Login com HMVC
class Login_model extends CI_Model {

	// Método de seleção do Admin 
	public function logar($emailAdmin,$senhaAdmin)
	{
		$this->db->where('emailAdmin',$emailAdmin); //Verifica se o e-mail do admin existe
		$this->db->where('senhaAdmin',$senhaAdmin); // Verifica se a senha do admin existe
		$queryExec = $this->db->get('admin');

		if ($queryExec->num_rows() == 1) 
		{
			$dadosAdmin = $queryExec->result();

			$this->session->set_userdata('nomeAdmin', $dadosAdmin[0]->nomeAdmin);
			$this->session->set_userdata('hashAdmin', $dadosAdmin[0]->hashAdmin);

			return TRUE;
		}
		else
		{
			$this->session->set_flashdata('erroLogin', 'O login e/ou a senha não confere, por favor tentar novamente ou entrar em contato com o administrador do sistema.');

			return FALSE;
		}

	}

	//Método de verificação se o usuário está logado e se a hash do mesmo é válida
	public function logado()
	{
		if($this->session->userdata('hashAdmin'))
		{
			$this->db->where('hashAdmin',$this->session->userdata('hashAdmin'));
			$queryExec = $this->db->get('admin');

			if($queryExec->num_rows() == 1)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}	
		else
		{
			return FALSE;
		}

	}


	// Método para realização do logout
	public function logout()
	{
		$this->session->sess_destroy('hashAdmin');
		return TRUE;
	}

}

/* End of file Login_model.php */
/* Location: ./application/modules/login/models/Login_model.php */