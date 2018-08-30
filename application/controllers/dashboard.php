<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
    
        public function verificar_sessao()
        {
            if($this->session->userdata('logado') == false){
                redirect('dashboard/login');
            }
        }

        public function index()
	{
            $this->verificar_sessao();
            $this->load->view('dashboard');
	}     
        
        public function login() 
        {
            $this->load->view('login');
        }
        
        public function atendimento(){
            $this->load->view('atendimento');
        }

                public function logar(){
            
            $email = $this->input->post('email');
            $senha = $this->input->post('senha');            
            
            $this->db->where('senha',$senha);
            $this->db->where('email',$email);
            $this->db->where('status',1);         
            $data['usuario'] = $this->db->get('usuario')->result();
            
            if(count($data['usuario'])==1){
                 $dados['nome'] = $data['usuario'][0]->nome;
                 $dados['id'] = $data['usuario'][0]->idUsuario;
                 $dados['logado'] = true;
                 $this->session->set_userdata($dados); 
                 redirect('dashboard');
            }else{
                 redirect('dashboard/login');
            } 
        }
        
        public function logout(){
            $this->session->sess_destroy();
            redirect('dashboard/login');
        }
        
}