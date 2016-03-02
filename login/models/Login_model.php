<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Model Class do Módulo de Login com HMVC
class Login_model extends CI_Model {

	// Método de seleção do Admin 
	public function logar($emailAdmin,$senhaAdmin)
	{
		$this->db->where('emailAdmin',$emailAdmin); //Verifica se o e-mail do admin existe
		$this->db->where('senhaAdmin',$senhaAdmin); // Verifica se a senha do admin existe

		if ($this->db->get('admin')->num_rows() == 1) 
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}

	}

}

/* End of file Login_model.php */
/* Location: ./application/modules/login/models/Login_model.php */