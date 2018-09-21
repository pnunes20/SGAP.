<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
        public function verificar_sessao()
        {
            if($this->session->userdata('logado') == false){
                redirect('dashboard/login');
            }
        }
        
        public function index()
	{
            $this->verificar_sessao();
            $this->db->select('*');
            $dados['login'] = $this->db->get('login')->result();
               /* if($indice==1){
                    $this->load->view('listar_login', $dados);
                    return alert('Usuário Cadastrado!');              
                              
                }else if($indice==2){
                    $this->load->view('listar_login', $dados);
                    return alert('Não foi possível Cadastrar o Usuario!'); 
                }if($indice==3){
                    $this->load->view('listar_login', $dados);
                    return alert('Usuário Excluído!'); 
                }  else if($indice==4){
                    $data['msg'] = "Não foi possível excluir o usuário.";
                    $this->load->view('includes/msg_erro',$data);
                } */
               
                $this->load->view('listar_login', $dados);
		
	}
        
        public function cadastro()
	{
                $this->verificar_sessao();
		$this->load->view('cadastro_login');
	}
        
        public function cadastrar()
        {
                $this->verificar_sessao();
                $data['nome'] = $this->input->post('nome');                             
                $data['email'] = $this->input->post('email');
                $data['senha'] = sha1($this->input->post('senha'));
                $data['data_nascimento'] = $this->input->post('data_nasc');
                $data['status'] = $this->input->post('status');                
                
                if($this->db->insert('login',$data)){
                    redirect('login');
                    
                }else{
                    redirect('login');
                }
        }
        public function excluir($id=null){
            
            $this->verificar_sessao();
            $this->db->where('cod_login',$id);
            if($this->db->delete('login')){
                    redirect('login');
               
                }else{
                    redirect('login');
                }
            
        }
        
        public function atualizar($id=null){
            
            $this->verificar_sessao();
            $this->db->where('cod_login',$id);
            $data['login'] = $this->db->get('login')->result();
            
           
            
            $this->load->view('editar_login',$data);
        }
        
         public function salvar_atualizacao()
        {
                $this->verificar_sessao();
                
                $id = $this->input->post('cod_login');
             
                $data['nome'] = $this->input->post('nome');                               
                $data['email'] = $this->input->post('email');  
                $data['data_nascimento'] = $this->input->post('data_nasc');
                $data['status'] = $this->input->post('status');               
                
                $this->db->where('cod_login',$id);
                if($this->db->update('login',$data)){
                    redirect('login');
                }else{
                    redirect('login');
                }
        }
        
        public function salvar_senha(){
            
            $this->verificar_sessao();
            $id = $this->input->post('cod_login');
            
            $senha_antiga = sha1($this->input->post('senha_antiga'));
            $senha_nova = sha1($this->input->post('senha_nova'));
           
            $this->db->select('senha');
            $this->db->where('cod_login', $id);
            $data['senha'] = $this->db->get('login')->result();
            $dados['senha'] = $senha_nova;
            
            if($data['senha'][0]-> senha == $senha_antiga) {
                $this->db->where('cod_login', $id);
                $this->db->update('login', $dados);
                redirect('login/atualizar/' . $id);
            }else{
                redirect('login/atualizar/' . $id);
            }
        }
}